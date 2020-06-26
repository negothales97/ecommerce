<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variation;
use App\Services\VariationService;
use Illuminate\Http\Request;

class VariationController extends Controller
{
    public function index()
    {
        $variations = Variation::get();
        return view('admin.pages.variation.index')
            ->with('variations', $variations);
    }

    public function store(Request $request)
    {
        VariationService::create($request->all());
        return \redirect()->back()
            ->with('success', 'Variação adicionada com sucesso');
    }

    public function edit(Variation $variation)
    {
        return view('admin.pages.variation.edit')
            ->with('variation', $variation);
    }
}
