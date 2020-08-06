<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\NewsletterService;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        NewsletterService::create($request->all());
        return \redirect()->back()->with('success', 'Cadastro realizado com sucesso.');
    }
}
