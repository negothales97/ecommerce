<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    public function store(Request $request, Product $product)
    {

        foreach($request->file() as $key => $file){

            $fileName = saveImage($file, $product->name);
            $position = $product->images()->count();
            $product->images()->create([
                'position' => $position,
                'file' => $fileName,
            ]);
        }
        return \redirect()->back();
    }
}
