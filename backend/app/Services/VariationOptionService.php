<?php

namespace App\Services;

use App\Models\Variation;
use App\Models\VariationOption;

class VariationOptionService
{
    public static function create(Variation $variation, $options)
    {
        $optionsToRemove = $variation->options()->whereNotIn('name', $options);
        $optionsToRemove->delete();
        
        $optionsName = $variation->options()->pluck('name')->toArray();
        $optionsToCreate = array_diff($options, $optionsName);

        
        foreach ($optionsToCreate as $option) {
            $variation->options()->create([
                'name' => $option,
            ]);
        }
    }

    public static function update(VariationOption $option, array $data)
    {
        $option->update($data);
    }

    public static function delete(VariationOption $option)
    {
        $option->delete();
    }
}