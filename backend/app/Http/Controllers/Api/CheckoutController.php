<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function consult(Request $request)
    {
        $customer  = Customer::where('email', $request->email)->first();
        if($customer){
            return \response()->json($customer);
        }
        return response()->json("Nao Localizado0", 404);
    }
}
