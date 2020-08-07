<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\SubproductService;
use App\Http\Controllers\Controller;

class SubproductController extends Controller
{
    public function store(Request $request, Product $product)
    {
        SubproductService::create($request->all(), $product);
        return \redirect()->back()
            ->with('success', 'Subproduto adicionado com sucesso');
    }
}
