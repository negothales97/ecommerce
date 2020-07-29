<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $promotions = Product::get();
        $featuredCategories=  Category::get();
        return view('customer.pages.home.index')
            ->with('promotions', $promotions)
            ->with('featuredCategories', $featuredCategories);
    }
}
