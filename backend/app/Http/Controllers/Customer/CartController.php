<?php

namespace App\Http\Controllers\Customer;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart');

        $items = [];
        if ($cart) {
            $i = 0;
            foreach ($cart as $key => $value) {
                $product = Product::find($cart[$key]['product_id']);
                if ($product) {
                    $items[$i] = [
                        'cart_key' => $key,
                        'product' => $product,
                        'product_id' => $cart[$key]['product_id'],
                        'quantity' => $cart[$key]['quantity'],
                    ];
                    $i++;
                } else {
                    unset($cart[$key]);
                }
            }
            usort($cart, "cmp");
        }

        session()->put('cart', $cart);
        session()->save();
        return view('customer.pages.cart.index')
            ->with('items', $items);
    }
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        // $user = Auth::guard('customer')->user();
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [];
            $i = 0;
        } else {
            $keys = array_keys($cart);
            $i = end($keys);
            $i++;
        }
        // if ($user) {
        //     $cartUser = Cart::where('email', $user->email)->first();
        //     if (!$cartUser) {
        //         $cartUser = Cart::create([
        //             'email' => $user->email,
        //         ]);
        //     }else{
        //         $cartUser->save();
        //     }
        // }
        $cart[$i] = [
            'product_id' => $request->product_id,
            'quantity' => 1,
        ];
        usort($cart, "cmp");

        session()->put('cart', $cart);
        session()->save();

        return redirect()->route('cart.index');

    }
}
