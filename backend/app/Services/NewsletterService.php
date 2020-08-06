<?php

namespace App\Services;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterService
{
    public static function index(Request $request)
    {
        return Newsletter::get();
    }

    public static function create(array $data)
    {
        Newsletter::create($data);
    }


    public static function delete(Newsletter $newsletter)
    {
        return $newsletter->delete();
    }
}