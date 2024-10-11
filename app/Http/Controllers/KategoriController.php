<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data['kategori'] = Kategori::all();

        return view('admin.kategori.index', $data);
    }

    public function form($id = NULL)
    {
        $data['kategori'] = Kategori::whereId($id)->first();

        return view('admin.kategori.form', $data);
    }

    public function store(Request $request)
    {
        Kategori::updateOrCreate(['id' => $request->id], $request->all());

        return redirect('/kategori');
    }

    public function destroy(Request $request)
    {
        Kategori::whereId($request->id)->delete();

        return redirect('/kategori');
    }
}
