<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Services\ProductCategoryService;

class ProductCategoryController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $product->categories()->sync($request->categories);
        return \redirect()->back()
            ->with('success', 'Categorias adicionadas');
    }

    public function change(Product $product, Category $category)
    {
        $productCategories = ProductCategory::where('category_id', $category->id)
            ->where('product_id', $product->id);
        if ($productCategories->count() == 0) {
            ProductCategoryService::create($category, $product);
        } else {
            ProductCategoryService::delete($category, $product, $productCategories);
        }
    }
}
