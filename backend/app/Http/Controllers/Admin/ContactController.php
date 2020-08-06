<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = ContactService::index($request);
        return view('admin.pages.contact.index')
            ->with('contacts', $contacts);
    }
    public function edit(Contact $contact)
    {
        return view('admin.pages.contact.edit')
            ->with('contact', $contact);
    }

    public function update(Contact $contact, ContactRequest $request)
    {
        ContactService::update($request->all(), $contact);
        return \redirect()
            ->back()
            ->with('success', 'Contato editada com sucesso');
    }

    public function delete(Contact $contact)
    {
        ContactService::delete($contact);
        return \redirect()
            ->back()
            ->with('success', 'Contato removido com sucesso');
    }
}
