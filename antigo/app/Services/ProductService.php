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
        if(validateRequest('price')){
            $data['price'] = \convertMoneyBrazilToUSA($data['price']);
        }
        if(validateRequest('promotional_price')){
            $data['promotional_price'] = \convertMoneyBrazilToUSA($data['promotional_price']);
        }
        if(validateRequest('weight')){
            $data['weight'] = \convertMoneyBrazilToUSA($data['weight']);
        }
        if(validateRequest('depth')){
            $data['depth'] = \convertMoneyBrazilToUSA($data['depth']);
        }
        if(validateRequest('width')){
            $data['width'] = \convertMoneyBrazilToUSA($data['width']);
        }
        if(validateRequest('height')){
            $data['height'] = \convertMoneyBrazilToUSA($data['height']);
        }
        $product->fill($data);
        $product->save();

        return $product;
    }

    public static function delete(Product $product)
    {
        return $product->delete();
    }
}