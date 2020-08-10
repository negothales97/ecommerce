<?php

namespace App\Http\Controllers\Customer;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('customer.pages.category.index')
        ->with('category', $category);
    }
}
