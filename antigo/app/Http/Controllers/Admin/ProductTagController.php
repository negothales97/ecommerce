<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    public function store(Request $request, Product $product)
    {
        foreach ($request->tags as $tag) {
            $product->tags()->create([
                'name' => $tag,
            ]);
        }
        return \redirect()->back()
            ->with('success', 'Tags adicionadas');
    }
}
