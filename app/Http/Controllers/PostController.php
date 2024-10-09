<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function landing()
    {
        $data['kategori'] = Kategori::all();
        $data['post'] = Post::all();

        return view('guest.landing', $data);
    }

    public function post($id)
    {
        $data['kategori'] = Kategori::all();
        $data['post'] = Post::whereId($id)->first();

        return view('guest.blog-post', $data);
    }
}
