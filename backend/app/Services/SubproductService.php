<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Subproduct;

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
    public static function update(array $data, Subproduct $subproduct)
    {
        $subproduct->update([
            'price' => \convertMoneyBrazilToUSA($data['price']),
            'price' => \convertMoneyBrazilToUSA($data['price']),
            'stock' => $data['stock'],
            'show' => $data['show'],
            'weight' => \convertMoneyBrazilToUSA($data['weight']),
            'depth' => \convertMoneyBrazilToUSA($data['depth']),
            'width' => \convertMoneyBrazilToUSA($data['width']),
            'height' => \convertMoneyBrazilToUSA($data['height']),
            'sku' => $data['sku'],
            'barcode' => $data['barcode'],
        ]);
    }
}
