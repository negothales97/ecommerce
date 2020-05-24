<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Contact::paginate($request->per_page));
    }

    public function store(Request $request)
    {
        $contact = Contact::create($request->all());

        return response()->json($contact,201);
    }

    public function show(Contact $contact)
    {
        return response()->json($contact);
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->fill($request->all());
        $contact->save();

        return response()->json($contact);
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return response()->json('', 200);
    }
}
