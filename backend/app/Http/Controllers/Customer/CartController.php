<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'product_id' => $request->product_id,
            'qty' => $request->qty,
        ];
        session(['cart' => $data]);
        return redirect()
            ->route('checkout');

    }
}
