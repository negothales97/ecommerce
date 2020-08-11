<?php

namespace App\Http\Controllers\Api;

use App\Models\Subproduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubproductController extends Controller
{
    
    public function show(Subproduct $resource)
    {
        $resource->depth = \convertMoneyUSAToBrazil($resource->depth);
        $resource->height = \convertMoneyUSAToBrazil($resource->height);
        $resource->price = \convertMoneyUSAToBrazil($resource->price);
        $resource->weight = \convertMoneyUSAToBrazil($resource->weight);
        $resource->width = \convertMoneyUSAToBrazil($resource->width);
        return response()->json($resource);
    }
}
