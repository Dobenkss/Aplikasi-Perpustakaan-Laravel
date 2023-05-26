<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use Illuminate\Http\Request;

class Kategori extends Controller
{
    public function index() {
        $kategori = Kategoris::get();
        $title = 'Kategori';
        return view(view: '/kategori/kategori', data: compact('kategori', 'title'));
    }

    public function create() {
        $title = 'Tambah Kategori';
        return view(view: '/kategori/tambah_kategori', data: compact('title'));
    }

    public function store(Request $request) {
        Kategoris::create([
            'nm_kategori' =>$request->nama
        ]);
        return redirect()->to('kategori');  
    }

    public function update(Kategoris $update) {
        $title = 'Edit Kategori';
        return view(view: '/kategori/update_kategori', data: compact('update', 'title'));
    }

    public function save(Request $request, Kategoris $update) {
        $update->update([
            'nm_kategori' => $request->nama
        ]);
        return redirect()->to('kategori');
    }

    public function delete(Kategoris $delete) {
        $delete->delete();
        return redirect()->to('kategori');
    }
}
