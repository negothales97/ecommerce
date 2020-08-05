<?php

namespace App\Http\Controllers\Admin;

use App\Models\Variation;
use Illuminate\Http\Request;
use App\Models\VariationOption;
use App\Services\VariationService;
use App\Http\Controllers\Controller;

class VariationController extends Controller
{
    public function index()
    {
        $variations = Variation::get();
        return view('admin.pages.variation.index')
            ->with('variations', $variations);
    }
    public function create()
    {
        return view('admin.pages.variation.create');
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

    public function optionUupdate(Request $request, VariationOption $option)
    {
        $option->update([
            'name' => $request->variation_name_option
        ]);
        return \redirect()->back()
            ->with('success', 'Propriedade atualizada com sucesso');
    }

    public function optionDelete(VariationOption $option)
    {
        $option->delete();
        return \redirect()->back()
        ->with('success', 'Propriedade removida com sucesso.');
    }
}
