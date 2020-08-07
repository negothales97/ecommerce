<?php

namespace App\Services;

use App\Models\Product;

class SubproductService
{
    public static function create(array $data, Product $product)
    {
            $subproduct = $product->products()->create([
                'price' => $product->price,
                'stock' => $product->stock,
                'weight' => $product->weight,
                'depth' => $product->depth,
                'width' => $product->width,
                'height' => $product->height,
                'sku' => $product->sku,
                'barcode' => $product->barcode,
            ]);
            $subproduct->variationOptions()->sync($data['variaton_option_id']);
    }
}