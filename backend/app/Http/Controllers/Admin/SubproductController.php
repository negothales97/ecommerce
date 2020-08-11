<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Subproduct;
use App\Services\SubproductService;
use Illuminate\Http\Request;

class SubproductController extends Controller
{
    public function store(Request $request, Product $product)
    {
        SubproductService::create($request->all(), $product);
        return \redirect()->back()
            ->with('success', 'Subproduto adicionado com sucesso');
    }

    public function update(Request $request, Product $product)
    {

        $subproduct = Subproduct::find($request->subproduct_id);
        SubproductService::update($request->all(), $subproduct);
        return \redirect()->back()
            ->with('success', 'Subproduto atualizado com sucesso');
    }

    public function change(Product $product, Subproduct $subproduct)
    {
        $subproduct->show = $subproduct->show == 1 ? 0 :1;
        $subproduct->save();
        return \redirect()->back()
            ->with('success', 'Subproduto atualizado com sucesso');
    }
}
