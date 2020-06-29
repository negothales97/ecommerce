<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        $products = Product::where('id', $cart['product_id'])->first();
        $total = $products->price * $cart['qty'];

        return view('customer.pages.checkout.index')
            ->with('total', $total);
    }
}
