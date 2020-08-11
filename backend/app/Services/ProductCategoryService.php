<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\ProductCategoryService;

class ProductCategoryService
{
    public static function create(Category $category, Product $product)
    {
        $productCategory = ProductCategory::where('category_id', $category->id)
            ->where('product_id', $product->id);
        if ($productCategory->count() == 0) {

            ProductCategory::create([
                'product_id' => $product->id,
                'category_id' => $category->id,
            ]);
        }
        if (count($category->categories) > 0) {
            foreach ($category->categories as $subcategory) {
                ProductCategoryService::create($subcategory, $product);
            }
        }
    }
    public static function delete(Category $category, Product $product, $productCategories)
    {
        $category = Category::find($productCategories->first()->category_id);
        $productCategories->delete();
        if (count($category->categories) > 0) {
            foreach ($category->categories as $subcategory) {
                $permissionsSubCategories = ProductCategory::where('category_id', $subcategory->id)
                    ->where('product_id', $product->id);
                ProductCategoryService::delete($subcategory, $product, $permissionsSubCategories);
            }
        }
    }
}
