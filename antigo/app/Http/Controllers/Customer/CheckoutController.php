<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use Illuminate\Http\Request;
use PagarMe;
use App\Http\Controllers\Controller;

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

    public function store(Request $request)
    {
        $data = $request->all();
        $pagarme = new PagarMe\Client( config('pagarme.api_key') );
        $transaction = $pagarme->transactions()->create([
            'amount' => 1000,
            'payment_method' => 'boleto',
            'async' => false,
            'customer' => [
              'external_id' => '1',
              'name' => 'Nome do cliente',
              'type' => 'individual',
              'country' => 'br',
              'documents' => [
                [
                  'type' => 'cpf',
                  'number' => '00000000000'
                ]
              ],
              'phone_numbers' => [ '+551199999999' ],
              'email' => 'cliente@email.com'
            ]
          ]);
        dd($transaction);


        // $transaction = $pagarme->transactions()->create([
        //     'amount' => 15000,
        //     'payment_method' => $data['pagarme']['payment_method'],
        //     'card_hash' => $cardHash,
        //     'customer' => [
        //         'external_id' => '1',
        //         'name' => $data['pagarme']['customer']['name'],
        //         'type' => 'individual',
        //         'country' => 'br',
        //         'documents' => [
        //             [
        //                 'type' => 'cpf',
        //                 'number' => $data['pagarme']['customer']['document_number']
        //             ]
        //         ],
        //         'phone_numbers' => [ '+55'.$data['pagarme']['customer']['phone']['ddd'].$data['pagarme']['customer']['phone']['number'] ],
        //         'email' => $data['pagarme']['customer']['email']
        //     ],
        //     'billing' => [
        //         'name' => $data['pagarme']['customer']['name'],
        //         'address' => [
        //             'country' => 'br',
        //             'street' => $data['pagarme']['customer']['address']['street'],
        //             'street_number' => $data['pagarme']['customer']['address']['street_number'],
        //             'state' => $data['pagarme']['customer']['address']['state'],
        //             'city' => $data['pagarme']['customer']['address']['city'],
        //             'neighborhood' => $data['pagarme']['customer']['address']['neighborhood'],
        //             'zipcode' => $data['pagarme']['customer']['address']['zipcode']
        //         ]
        //     ],
        //     'items' => $vouchers,
        //     'split_rules' => $splitRules,
        //     'postback_url' => config('services.pagarme.postback_url'),
        //     'async' => false
        // ]);

    }
}
