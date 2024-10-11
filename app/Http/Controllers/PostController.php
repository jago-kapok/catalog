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
        $data['posts'] = Post::orderByDesc('id')->limit(5)->get();

        return view('guest.blog-post', $data);
    }

    public function index()
    {
        $data['post'] = Post::orderByDesc('id')->get();

        return view('admin.post.index', $data);
    }

    public function form($id = NULL)
    {
        $data['post'] = Post::whereId($id)->first();
        $data['kategori'] = Kategori::all();

        return view('admin.post.form', $data);
    }

    public function store(Request $request)
    {
        Post::updateOrCreate(['id' => $request->id], $request->all());

        return redirect('/post');
    }

    public function destroy(Request $request)
    {
        Post::whereId($request->id)->delete();

        return redirect('/post');
    }
}
