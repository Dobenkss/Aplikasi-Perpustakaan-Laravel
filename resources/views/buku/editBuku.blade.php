@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/updateBuku/{{$editBuku->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{ $editBuku->judul }}">
                </div>
                <div>
                  <label for="form-label" for="nm_kategori">Pilih Kategori</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="nm_kategori" id="nm_kategori">
                        @forelse($kategori as $kat)
                        <option value="{{ $kat->id }}" @if ($kat->id === $editBuku->kategori_id)
                            selected 
                        @endif>{{ $kat->nm_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                  <label for="form-label" for="nm_penerbit">Pilih Penerbit</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="nm_penerbit" id="nm_penerbit">
                      <option>pilih</option>
                      @foreach($penerbit as $pen)
                      <option value="{{ $pen->id }}" @if ($pen->id === $editBuku->penerbit_id)
                          selected
                      @endif>{{ $pen->nm_penerbit}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                  <label for="penulis" class="form-label">Nama Penulis</label>
                  <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $editBuku->penulis }}">
                </div>
                <div class="mb-3">
                  <label for="thnTerbit" class="form-label">Tahun Terbit</label>
                  <input type="text" class="form-control" id="thnTerbit" name="thnTerbit" value="{{ $editBuku->thn_terbit }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/penerbit/penerbit">Batal</a>
              </form>
        </div>
    </div>
</div>
@endsection
