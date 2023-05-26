<?php

namespace App\Http\Controllers;

use App\Models\Penerbits;
use Illuminate\Http\Request;

class Penerbit extends Controller
{
    public function index() {
        $penerbit = Penerbits::get();
        $title = 'Halaman Penerbit';
        return view(view: '/penerbit/penerbit', data: compact('penerbit', 'title'));
    }

    public function create() {
        $title = 'Halaman Tambah Penerbit';
        return view(view: '/penerbit/tambah_penerbit', data: compact('title'));
    }

    public function store(Request $request) {
        Penerbits::create([
            'nm_penerbit' => $request->nama,
        ]);
        return redirect()->to('penerbit');
    }

    public function update(Penerbits $update) {
        $title = 'Halaman Edit Penerbit';
        return view(view: '/penerbit/update_penerbit', data: compact('update', 'title'));
    }

    public function save(Request $request, Penerbits $update) {
        $update->update([
            'nm_penerbit' => $request->nama,
        ]);
        return redirect()->to('penerbit');
    }

    public function delete(Penerbits $delete) {
        $delete->delete();
        return redirect()->to('penerbit');
    } 
}
