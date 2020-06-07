<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductVariationService;

class ProductVariationController extends Controller
{
    public function store(Request $request, Product $product)
    {
        if ($request->has('variation_name')) {
            if($request->variation_name != ''){
                $variation = Variation::create([
                    'name' => $request->variation_name,
                ]);
                $options = explode(',', $request->variation_name_option);
                foreach ($options as $option) {
    
                    $variation->options()->create([
                        'name' => $option,
                    ]);
                }
            }
        }
        ProductVariationService::create($product, $request->all());
        
        return \redirect()->back()
        ->with('status', 'Variações Adicionadas');
    }
}
