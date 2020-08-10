<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\SubproductVariationOption;
use App\Models\Variation;
use App\Services\ProductVariationService;
use Illuminate\Http\Request;

class ProductVariationController extends Controller
{
    public function store(Request $request, Product $product)
    {
        // if(validateRequest('variation_name')){
        //         $variation = Variation::create([
        //             'name' => $request->variation_name,
        //         ]);
        //         $options = explode(',', $request->variation_name_option);
        //         foreach ($options as $option) {

        //             $variation->options()->create([
        //                 'name' => $option,
        //             ]);
        //         }
        // }

        ProductVariationService::create($product, $request->all());

        return \redirect()->back()
            ->with('success', 'Variações Adicionadas');
    }

    public function change(Product $product)
    {
        $product->use_subproduct = $product->use_subproduct == 0 ? 1 : 0;
        $product->save();
        return response()->json($product);
    }

    public function delete(Product $product, Variation $variation)
    {
        $subProducts = $product->products->pluck('id')->toArray();
        $variationOptionsId = $variation->options()->pluck('id')->toArray();
        SubproductVariationOption::whereIn('subproduct_id', $subProducts)
            ->whereIn('variation_option_id', $variationOptionsId)->delete();

        ProductVariation::where('product_id', $product->id)->where('variation_id', $variation->id)->delete();
        return \redirect()->back()
            ->with('success', 'Variações Removidas');
    }
}
