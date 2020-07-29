<?php

namespace App\Services;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagService
{

    public static function index(Request $request)
    {
        return Tag::get();
    }

    public static function create(array $data)
    {
        
        return Tag::create($data);
    }


    public static function update(array $data, Tag $tag)
    {
        $tag->fill($data);
        $tag->save();

        return $tag;
    }

    public static function delete(Tag $tag)
    {
        return $tag->delete();
    }
}