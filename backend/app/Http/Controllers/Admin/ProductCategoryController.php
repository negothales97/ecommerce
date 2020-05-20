<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $product->categories()->sync($request->categories);
        return \redirect()->back()
            ->with('success', 'Categorias adicionadas');
    }
}
