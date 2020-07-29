<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $tags = TagService::index($request);
        return view('admin.pages.tag.index')
            ->with('tags', $tags);
    }
    public function create()
    {
        return view('admin.pages.tag.create');
    }

    public function store(TagRequest $request)
    {
        $tag = TagService::create($request->all());
        return \redirect()
            ->route('admin.tag.edit', ['tag' => $tag])
            ->with('success', 'Tag cadastrada com sucesso');
    }
    public function edit(Tag $tag)
    {
        return view('admin.pages.tag.edit')
            ->with('tag', $tag);
    }

    public function update(Tag $tag, TagRequest $request)
    {
        TagService::update($request->all(), $tag);
        return \redirect()
            ->back()
            ->with('success', 'Tag editada com sucesso');
    }

    public function delete(Tag $tag)
    {
        TagService::delete($tag);
        return \redirect()
            ->back()
            ->with('success', 'Tag removida com sucesso');
    }
}
