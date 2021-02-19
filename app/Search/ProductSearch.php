<?php 

namespace App\Search;

use App\Http\Resources\ListResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class ProductSearch
{
	public static function apply(Request $filters)
  	{
		$product = (new Product)->newQuery();

		//^ Search by name
		if ($filters->has('name')) {
			$name = $filters->input('name');

			$product->where('name', 'ilike', "%$name%");
		}

		//^ Search by condition
		if ($filters->has('condition')) {
			$condition = $filters->input('condition');

			$product->where('condition', '=', $condition);
		}

		//^ Search by Category
		if ($filters->has('categories') && is_array($filters->input('categories'))) {
			$product->whereHas('categories', function ($query) use ($filters) {
					$query->where(function ($query) use ($filters) {
							for ($i = 0; $i < count($filters->input('categories')); $i++) {
									$query->orWhere('category_id', '=',  $filters->input('categories')[$i]);
							}
					});
			});
		}

		//^ Search by Price
		// if ($filters->has('min_price') && $filters->has('max_price')) {
		// 	$min_price = $filters->input('min_price');
		// 	$max_price = $filters->input('max_price');
		// 	$product->where('price', '>=', $min_price)->where('price', '<=', $max_price);
		// }

		if ($filters->has('price')) {
			$product->where('price', '>=' , (int) $filters->input('price')['min'] ?? '');
			$product->where('price', '<=' , (int) $filters->input('price')['max'] ?? '');
		}

		// if ($filters->has('rating')) {
		// 	$rating = (double) $filters->input('rating');
		// 	$product->whereHas('reviews', function ($query) use ($rating) {
		// 		$query->where('rate', '>=', $rating);
		// 	});
		// 	// $lego = Product::findOrFail(2);
		// 	// $product = new ListResource($lego);
		// 	// $reviews = $lego->reviews;
		// 	// dd(gettype($product->reviews[0]->rate));
		// }

		// Sort By

		if ($filters->has('sort_by')) {
			switch ($filters->input('sort_by')) {
				case 'name':
					$result = collect($product->get());
					$sorted = $result->sortByDesc(function ($product, $key) {
						return $product->name;
					});
					return response()->successWithKey(ListResource::collection($sorted), 'products');
					break;
				case 'rating':
					$result = collect($product->get());
					$sorted = $result->sortByDesc(function ($product, $key) {
						return $product->reviews->avg('rate');
					});
					return response()->successWithKey(ListResource::collection($sorted), 'products');
					break;
				case 'max_price':
					$result = collect($product->get());
					$sorted = $result->sortByDesc(function ($product, $key) {
						return $product->price;
					});
					return response()->successWithKey(ListResource::collection($sorted), 'products');
					break;
				case 'min_price':
					$result = collect($product->get());
					$sorted = $result->sortBy(function ($product, $key) {
						return $product->price;
					});
					return response()->successWithKey(ListResource::collection($sorted), 'products');
					break;
			}
		}

		return response()->successWithKey(ListResource::collection($product->get()), 'products');
  	}

}

?>