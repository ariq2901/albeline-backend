<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProduct;
use App\Http\Requests\ImageProduct;
use App\Http\Requests\SearchProduct;
use App\Http\Requests\UpdateProduct;
use App\Http\Resources\Detail\DetailResource;
use App\Http\Resources\ListCollection;
use App\Http\Resources\ListResource;
use App\Http\Resources\ProductByCategoryCollection;
use App\Http\Resources\ProductByCategoryResources;
use App\Models\Category;
use App\Models\Product;
use App\Search\ProductSearch;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageIn;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
		return new ListCollection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(CreateProduct $request)
    {
        $input = $request->validated();
        $input['store_id'] = $request->user()->store->id;
        $categories = $input['categories'];
        unset($input['categories']);
        $product = Product::create($input);
        foreach ($categories as $category_item) {
            DB::table('category_product')->insert([
                'category_id' => $category_item,
                'product_id' => $product->id,
                'created_at' => now()->timezone('Asia/Jakarta'),
                'updated_at' => now()->timezone('Asia/Jakarta'),
            ]);
        }

        return response()->successWithKey(new ListResource($product), 'product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
			$product = Product::findOrFail($id);
		} catch(\Throwable $th) {
			return response()->error('Product not found', StatusCode::NOT_FOUND);
		}
		$product = new DetailResource($product);
		return response()->successWithKey($product, 'product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
        } catch(\Throwable $th) {
            return response()->error('Product is not found', StatusCode::NOT_FOUND);
        }

        if ($product->store->user_id !== $request->user()->id) {
            return response()->error('You are not a shop owner', StatusCode::UNAUTHORIZED);
        }

        if (isset($request->validator) && $request->validator->fails()) {
            return response()->error($request->validator->getMessageBag(), StatusCode::UNPROCESSABLE_ENTITY);
        }

        $input = $request->validated();
        $product->fill($input);
        $product->update();
        return response()->successWithKey(new ListResource($product), 'product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
        } catch(\Throwable $th) {
            return response()->error('Product is not found', StatusCode::NOT_FOUND);
        }
        
        if ($product->store->user_id !== Auth::user()->id) {
            return response()->error('You are not a shop owner', StatusCode::UNAUTHORIZED);
        }

        $product->delete();
        return response()->successWithMessage('Product has been deleted successfully', StatusCode::OK);
    }

    public function storeImage(ImageProduct $imageProduct, $id)
    {
        try {
            $product = Product::findOrFail($id);
        } catch(\Throwable $th) {
			return response()->error('Product is not found', StatusCode::NOT_FOUND);
        }
        
        if($product->store->user_id !== $imageProduct->user()->id) {
            return response()->error("You're not the owner oh this store");
        }

        $input = $imageProduct->validated();
        $classifiedImg = $imageProduct->file('image');
        $compressed_product_name = preg_replace('/\s+/', '_', $product->name);
        $final_name = time() . "_" . strtolower($compressed_product_name);
        $path = "products/" . strtolower(preg_replace('/\s+/', '_', $product->store->name)) . "/" . strtolower($compressed_product_name);
        $folder_path = "storage/images/products/" . strtolower(preg_replace('/\s+/', '_', $product->store->name)) . "/";
        // $input['image']->storeAs("/images/$path", $final_name, 'public');

        if (!File::exists($folder_path)) {
            mkdir("storage/images/products/" . strtolower(preg_replace('/\s+/', '_', $product->store->name)) . "/", 666, true);
        }
        
        //? Meng-convert format file gambar menjadi .webp dan me-rescale file gambar, agar ringan & lebih cepat di-load
        ImageIn::make($classifiedImg)->encode('webp', 80)->resize(570, 570, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save(public_path('storage/images/' . $path . '.webp'));

        if($product->image === null) {
            $product->images()->create(['path' => $path."/".$final_name, 'thumbnail' => true]);
        } else {
            $product->images()->create(['path' => $path."/".$final_name, 'thumbnail' => false]);
        }

        return response()->successWithKey(new ListResource($product), 'product', StatusCode::CREATED);
    }

    public function byCategory($id)
	{
		try {
			$products = Category::findOrFail($id)->products()->paginate();
		} catch(\Throwable $th) {
			response()->error('Category not found');
		}

		$products = new ProductByCategoryCollection($products);
		return response()->successWithKey($products, 'products');
	}
}
