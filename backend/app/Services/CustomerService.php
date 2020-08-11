<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerService
{
    public static function index(Request $request)
    {
        return Customer::get();
    }

    public static function create(array $data)
    {
        $data['birthday'] = \convertDateBrazilToUSA($data['birthday']);
        return Customer::create($data);
    }


    public static function update(array $data, Customer $customer)
    {
        $data['birthday'] = \convertDateBrazilToUSA($data['birthday']);

        $customer->fill($data);
        $customer->save();

        return $customer;
    }

    public static function delete(Customer $customer)
    {
        return $customer->delete();
    }
}