<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $idCustomer = last(request()->segments());
        $unique = ($idCustomer == 'store') ? 'unique:customers' : "unique:customers,email,{$idCustomer}";
        $rules= [
            'name' => 'required',
            'email' => "required|{$unique}",
            'birthday' => 'required',
            'cellphone' => 'required',
        ];
        if (request()->is('*store*')) {
            $rules['password'] = 'required|confirmed|min:6';
        }
        return $rules;
    }
}
