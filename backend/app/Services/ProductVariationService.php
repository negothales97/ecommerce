<?php

namespace App\Services;

use App\Models\Product;

class ProductVariationService
{
    public static function create(Product $product, array $data)
    {
        return $product->products()->create([
            'price' => $product->price,
            'stock' => $product->stock,
            'weight' => $product->weight,
            'depth' => $product->depth,
            'width' => $product->width,
            'height' => $product->height,
            'sku' => $product->sku,
            'barcode' => $product->barcode,
            'variation_id' => $data['variation_id'],
            'variation_option_id' => $data['variation_option'],
        ]);
    }
}