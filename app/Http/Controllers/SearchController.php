<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchProduct;
use App\Search\ProductSearch;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(SearchProduct $request)
    {
        return ProductSearch::apply($request);
    }
}
