<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Services\NewsletterService;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
        $newsletters = NewsletterService::index($request);
        return view('admin.pages.newsletter.index')
            ->with('newsletters', $newsletters);
    }    

    public function delete(Newsletter $newsletter)
    {
        NewsletterService::delete($newsletter);
        return \redirect()
            ->back()
            ->with('success', 'Dado removido com sucesso');
    }
}
