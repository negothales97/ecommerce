<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('customer.pages.product.index')
            ->with('product', $product);
    }
}
