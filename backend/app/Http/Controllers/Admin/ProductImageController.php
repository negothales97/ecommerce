<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        $file = $request->file('file');

        $position = $product->images()->count();
        $fileName = saveImage($file, $product->name);
        
        $product->images()->create([
            'position' => $position,
            'file' => $fileName,
        ]);
        return response()->json([
            'filename' => $fileName,
            'message' => 'Imagem salva com sucesso',
        ], 200);
    }

    function list($id) {
        $result = array();

        $images = ProductImage::where('product_id', $id)->orderBy('position', 'asc')->get();

        if (count($images) > 0) {
            foreach ($images as $image) {
                $obj['name'] = $image->file;
                $obj['size'] = '100';
                if ($image->color_id != null && $image->color_id != '') {
                    $obj['color'] = true;
                } else {
                    $obj['color'] = false;
                }
                $result[] = $obj;
            }
        }

        return json_encode($result);
    }

    public function sort(Request $request)
    {
        $i = 1;
        if ($request->has('files')) {
            foreach ($request['files'] as $file) {
                $p = ProductImage::where('file', $file)->first();
                $p->update([
                    'position' => $i,
                ]);

                $i++;
            }
        }

    }
}
