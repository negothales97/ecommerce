<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductService
{
    public static function index(Request $request)
    {
        return Product::paginate($request->per_page);
    }

    public static function create(array $data)
    {
        return Product::create($data);
    }

    public static function update(array $data, Product $product)
    {
        $product->fill($data);
        $product->save();

        return $product;
    }

    public static function delete(Product $product)
    {
        return $product->delete();
    }
}