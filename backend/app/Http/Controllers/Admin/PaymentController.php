<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ConfigurationPayment;

class PaymentController extends Controller
{
    public function edit()
    {
        $payment = ConfigurationPayment::first();
        return view('admin.pages.payment.edit')
        ->with('payment', $payment);

    }

    public function update(Request $request)
    {
        $payment = ConfigurationPayment::first();
        $data = $request->all();
        $data['minimum_value_credit_card'] = \convertMoneyBrazilToUSA($data['minimum_value_credit_card']);
        $data['minimum_value_boleto'] = \convertMoneyBrazilToUSA($data['minimum_value_boleto']);
        $data['percentage_discount_boleto'] = \convertMoneyBrazilToUSA($data['percentage_discount_boleto']);

        $payment->fill($data);
        $payment->save();
        return redirect()->back()->with('success', 'Dados atualizados com sucesso ');
    }
}
