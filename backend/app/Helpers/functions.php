<?php

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

function saveImage($originalImage, $name)
{
    $thumbnailPath = public_path() . '/uploads/products/thumbnail/';
    $originalPath = public_path() . '/uploads/products/original/';

    $fileName = getNameFile($name, $originalImage);

    $image = Image::make($originalImage);
    $image->save($originalPath . $fileName);

    $image->resize(250, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $image->save($thumbnailPath . $fileName, 100);

    return $fileName;
}

function getNameFile($name, $originalImage)
{
    $extension = '.' . File::extension($originalImage->getClientOriginalName());
    $fileName = $name . date('Ymd') . time() . microtime();
    $fileName = str_replace('.', '', $fileName);
    $fileName = str_replace(' ', '', $fileName) . $extension;

    return $fileName;
}

function convertMoneyBrazilToUSA($value)
{
    $value = str_replace(',', '.', str_replace('.', '', $value));
    $value = floatval($value);

    return $value;
}
function convertMoneyUSAToBrazil($value)
{
    $value = number_format($value, 2, ',', '.');

    return $value;
}

function convertDateBrazilToUSA($date)
{
    $date = implode("-", array_reverse(explode("/", $date)));

    return $date;
}

function convertDateUSAToBrazil($date)
{
    // $date = implode("/", array_reverse(explode("-", $date)));
    $date = date("d/m/Y", strtotime($date));
    return $date;
}

function getSubcategories(Category $category)
{
    if ($category->categories->count() > 0) {
        foreach ($category->categories as $subcategory) {
            getSubcategories($subcategory);
        }
    }

}
