<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Category::paginate($request->per_page));
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category,201);
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();

        return response()->json($category);
    }

    public function delete(Category $category)
    {
        $category->delete();
        return response()->json('', 200);
    }
}
