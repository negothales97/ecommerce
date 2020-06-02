<?php


namespace App\Services;

use App\Models\Variation;
use Illuminate\Http\Request;


class VariationService
{
    public static function index(Request $request)
    {
        return Variation::paginate($request->per_page);
    }

    public static function show(Variation $variation)
    {
        return $variation;
    }
}