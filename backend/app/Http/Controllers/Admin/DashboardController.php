<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $products = Product::get();
        return view('admin.pages.dashboard.index')
            ->with('categories', $categories)
            ->with('products', $products);
    }
}
