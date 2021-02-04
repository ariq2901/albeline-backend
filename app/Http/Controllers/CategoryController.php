<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageIn;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return response()->successWithKey(CategoryResource::collection($categories), 'categories');
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
    public function store(CreateCategory $request)
    {
        $input = $request->validated();
        $final_name = time() . "_" . strtolower($input['name']) . ".png";
        $folder = 'categories';
        $path = $folder . "/" . $final_name;
        $category = Category::create($request->only(['name']));
        $image = ImageIn::make($request->file('image'))->encode('png', 75);
        Storage::put("public/images/$path", $image);

        $category->image()->create(['path' => "$folder/$final_name", 'thumbnail' => true]);

        if($category) {
            return response()->successWithMessage('Category added successfully', StatusCode::CREATED);
        }
        return response()->successWithMessage('Something went wrong', StatusCode::BAD_REQUEST);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(UpdateCategory $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
        } catch(\Throwable $th) {
            return response()->error('Category is not found', StatusCode::NOT_FOUND);
        }

        if($request->hasFile('image')) {
            $old_path = $category->image->path;
            Storage::disk('local')->delete("public/images/$old_path");

            $input = $request->validated();
            $final_name = time() . "_" . strtolower($input['name']) . ".png";
            $folder = 'categories';
            $path = $folder . "/" . $final_name;
            $image = ImageIn::make($request->file('image'))->encode('png', 75);
            $category->image()->update(['path' => "$folder/$final_name"]);
            Storage::put("public/images/$path", $image);
        }

        $category->fill($request->validated());
        // dd($request['name']);
        // $category->name = $request->name;
        $category->update();
        return response()->successWithKey(new CategoryResource($category), 'category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $category = Category::findOrFail($id);
        } catch(\Throwable $th) {
            return response()->error('Category is not found', StatusCode::NOT_FOUND);
        }

        $category->delete();
        return response()->successWithMessage('Category has been deleted successfully', StatusCode::OK);
    }
    
}
