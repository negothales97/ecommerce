<?php

namespace App\Http\Controllers\Api;

use App\Models\Variation;
use Illuminate\Http\Request;
use App\Services\VariationService;
use App\Http\Controllers\Controller;

class VariationController extends Controller
{
    public function index(Request $request)
    {
        $variations = VariationService::index($request);

        return \response()->json($variations,200 );
    }

    public function show(Variation $variation)
    {
        $variation = VariationService::show($variation);
        return \response()->json($variation);
    }
}
