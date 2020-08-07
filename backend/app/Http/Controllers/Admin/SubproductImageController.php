<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SubproductImageService;

class SubproductImageController extends Controller
{
    public function store(Request $request, Product $product)
    {
        SubproductImageService::create($request->all());

        return \redirect()
        ->back()
        ->with('success', 'Imagem vinculada com sucesso');
    }
}
