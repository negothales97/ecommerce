<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{

    public static function index(Request $request)
    {
        return Category::paginate($request->per_page);
    }

    public static function create(array $data)
    {
        
        return Category::create($data);
    }


    public static function update(array $data, Category $category)
    {
        $category->fill($data);
        $category->save();

        return $category;
    }

    public static function delete(Category $category)
    {
        return $category->delete();
    }
}