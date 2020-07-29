<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('customer.pages.search.index')
        ->with('products', $products);
    }
}
