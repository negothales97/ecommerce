<?php

namespace App\Http\Controllers\Admin;

use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class SubcategoryController extends Controller
{
    public function store(CategoryRequest $request)
    {
        $category = CategoryService::create($request->all());
        return \redirect()
            ->back()
            ->with('success', 'Categoria adicionada com sucesso');
    }

}
