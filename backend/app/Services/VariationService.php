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

    public static function create(array $data)
    {
        $variation = Variation::create($data);
        if(\validateRequest('variation_name_option')){
            $options = explode(',', $data['variation_name_option']);
            foreach ($options as $option) {
                $variation->options()->create([
                    'name' => $option,
                ]);
            }
        }
    }

    public static function show(Variation $variation)
    {
        return $variation;
    }
}