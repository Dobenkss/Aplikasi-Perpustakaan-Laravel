<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategoris;
use App\Models\Penerbits;
use Illuminate\Http\Request;

class ControllerBuku extends Controller
{
    public function index() {
        $title = "Buku page";
        $buku = Buku::get();
        return view(view: '/buku/buku', data: compact('buku', 'title'));
    }
    
    public function create() {
        $title = "Tambah Buku page";
        $buku = Buku::get();
        $kategori = Kategoris::get();
        $penerbit = Penerbits::get();
        
        return view(view: '/buku/tambahbuku', data: compact('title', 'buku', 'kategori', 'penerbit'));
    }

    public function store(Request $request) {
        Buku::create([
            'judul' => $request->judul,
            'kategori_id' => $request->nm_kategori,
            'penerbit_id' => $request->nm_penerbit,
            'penulis' => $request->penulis,
            'thn_terbit' => $request->thnTerbit
            // 'nm_kategori' => $request->,
        ]);

        return redirect()->to('buku');
    }
    public function edit(Buku $editBuku){
        $title = "Edit Buku Page";
        $buku = Buku::get();
        $kategori = Kategoris::get();
        $penerbit = Penerbits::get();
        return view(view: 'buku/editBuku', data: compact('title', 'editBuku', 'buku', 'kategori', 'penerbit'));
    }
    public function update(Request $request, Buku $updateBuku) {
        $updateBuku->update([
            'judul' => $request->judul,
            'kategori_id' => $request->nm_kategori,
            'penerbit_id' => $request->nm_penerbit,
            'penulis' => $request->penulis,
            'thn_terbit' => $request->thnTerbit
            // 'nm_kategori' => $request->,
        ]);

        return redirect()->to('buku');
    }
    public function delete(Buku $deleteBuku) {
        $deleteBuku->delete();
        return redirect()->to('buku');
        
    }
}
