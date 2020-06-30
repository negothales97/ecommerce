<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $promotions = Product::get();
        return view('customer.pages.home.index')
            ->with('promotions', $promotions);
    }
}
