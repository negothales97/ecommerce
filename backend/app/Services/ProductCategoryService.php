<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Services\ProductCategoryService;

class ProductCategoryService
{
    public static function create(Category $category, Product $product)
    {
        ProductCategory::create([
            'product_id' => $product->id,
            'category_id' => $category->id,
        ]);
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
                $permissionsSubCategories = ProductCategory::where('folder_id', $subcategory->id)
                    ->where('course_id', $course->id);
                ProductCategoryService::delete($subcategory, $course, $permissionsSubCategories);
            }
        }
    }
}