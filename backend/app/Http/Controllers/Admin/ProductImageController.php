<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    public function store(Request $request)
    {
        dd($request->file());
    }
}
