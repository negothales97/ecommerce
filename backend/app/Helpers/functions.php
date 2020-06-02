<?php

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
