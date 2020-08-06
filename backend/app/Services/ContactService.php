<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactService
{

    public static function index(Request $request)
    {
        return Contact::get();
    }

    public static function create(array $data)
    {
        
        return Contact::create($data);
    }


    public static function update(array $data, Contact $contact)
    {
        $contact->fill($data);
        $contact->save();

        return $contact;
    }

    public static function delete(Contact $contact)
    {
        return $contact->delete();
    }
}