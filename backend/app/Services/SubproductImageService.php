<?php

namespace App\Services;

use App\Models\Subproduct;

class SubproductImageService
{
    public static function create(array $data)
    {
        $subproduct = Subproduct::find($data['subproduct_id']);
        $subproduct->update([
            'product_image_id' => $data['image_id']
        ]);
    }
}