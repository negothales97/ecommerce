<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = ProductService::index($request);
        return view('admin.pages.product.index')
            ->with('products', $products);
    }
    public function create()
    {
        return view('admin.pages.product.create');
    }

    public function store(ProductRequest $request)
    {
        $product = ProductService::create($request->all());
        return \redirect()
            ->route('admin.product.edit', ['product' => $product])
            ->with('success', 'Produto cadastrado com sucesso');
    }
    public function edit(Product $product)
    {
        $categories = $product->categories;
        $tags = [];

        return view('admin.pages.product.edit')
            ->with('categories', $categories)
            ->with('tags', $tags)
            ->with('product', $product);
    }

    public function update(Product $product, ProductRequest $request)
    {
        ProductService::update($request->all(), $product);
        return \redirect()
            ->back()
            ->with('success', 'Produto editado com sucesso');
    }

    public function delete(Product $product)
    {
        ProductService::delete($product);
        return \redirect()
            ->back()
            ->with('success', 'Produto removido com sucesso');
    }
}
