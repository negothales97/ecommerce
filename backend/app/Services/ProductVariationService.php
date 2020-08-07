<?php

namespace App\Services;

use App\Models\Product;

class ProductVariationService
{
    public static function create(Product $product, array $data)
    {
        $product->variations()->sync($data['variation_id']);
    }
}