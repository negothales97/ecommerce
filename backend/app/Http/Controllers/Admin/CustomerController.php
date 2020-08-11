<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Services\CustomerService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = CustomerService::index($request);
        return view('admin.pages.customer.index')
            ->with('customers', $customers);
    }
    public function create()
    {
        return view('admin.pages.customer.create');
    }

    public function store(CustomerRequest $request)
    {
        $customer = CustomerService::create($request->all());
        return \redirect()
            ->route('admin.customer.edit', ['customer' => $customer])
            ->with('success', 'Cliente cadastrada com sucesso');
    }
    public function edit(Customer $customer)
    {
        return view('admin.pages.customer.edit')
            ->with('customer', $customer);
    }

    public function update(Customer $customer, CustomerRequest $request)
    {
        CustomerService::update($request->all(), $customer);
        return \redirect()
            ->back()
            ->with('success', 'Cliente editada com sucesso');
    }

    public function delete(Customer $customer)
    {
        CustomerService::delete($customer);
        return \redirect()
            ->back()
            ->with('success', 'Cliente removida com sucesso');
    }
}
