<?php

namespace App\Http\Controllers\Admin;

use App\Models\Variation;
use Illuminate\Http\Request;
use App\Models\VariationOption;
use App\Http\Controllers\Controller;
use App\Services\VariationOptionService;

class VariationOptionController extends Controller
{
    public function store(Request $request)
    {
        $variation = Variation::find($request->variation_id);
        VariationOptionService::create($variation, $request->option);
        return \redirect()
            ->back()
            ->with('success', 'Propriedades adicionadas com sucesso');
    }

    public function update(VariationOption $option, Request $request)
    {
        VariationOptionService::update($option, $request->all());
        return \redirect()
        ->back()
        ->with('success', 'Propriedade atualizada com sucesso');
    }
    
    public function delete(VariationOption $option)
    {
        VariationOptionService::delete($option);
        return \redirect()
        ->back()
        ->with('success', 'Propriedade removida com sucesso');
    }
}
