<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $promotions = Product::get();
        $novelties = Product::get();
        $fastPromotions = Product::get();
        $featuredCategories=  Category::get();
        return view('customer.pages.home.index')
            ->with('fastPromotions', $fastPromotions)
            ->with('promotions', $promotions)
            ->with('novelties', $novelties)
            ->with('featuredCategories', $featuredCategories);
    }
}
