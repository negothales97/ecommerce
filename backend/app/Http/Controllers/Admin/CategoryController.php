<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::whereNull('parent_id')->paginate(10);
        return view('admin.pages.category.index')
            ->with('categories', $categories);
    }
    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = CategoryService::create($request->all());
        return \redirect()
            ->route('admin.category.edit', ['category' => $category])
            ->with('success', 'Categoria cadastrada com sucesso');
    }
    public function edit(Category $category)
    {
        return view('admin.pages.category.edit')
            ->with('category', $category);
    }

    public function update(Category $category, CategoryRequest $request)
    {
        CategoryService::update($request->all(), $category);
        return \redirect()
            ->back()
            ->with('success', 'Categoria editada com sucesso');
    }

    public function delete(Category $category)
    {
        CategoryService::delete($category);
        return \redirect()
            ->back()
            ->with('success', 'Categoria removida com sucesso');
    }

}
