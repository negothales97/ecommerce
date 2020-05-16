<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Product::paginate($request->per_page));
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product,201);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();

        return response()->json($product);
    }

    public function delete(Product $product)
    {
        $product->delete();
        return response()->json('', 200);
    }
}
