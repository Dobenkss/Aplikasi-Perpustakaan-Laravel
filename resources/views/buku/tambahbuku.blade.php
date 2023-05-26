@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="storeBuku" method="post">
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div>
                  <label for="form-label" for="nm_kategori">Pilih Kategori</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="nm_kategori" id="nm_kategori">
                        @forelse($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->nm_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                  <label for="form-label" for="nm_penerbit">Pilih Penerbit</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="nm_penerbit" id="nm_penerbit">
                      <option>pilih</option>
                      @foreach($penerbit as $pen)
                      <option value="{{ $pen->id }}">{{ $pen->nm_penerbit}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                  <label for="penulis" class="form-label">Nama Penulis</label>
                  <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="mb-3">
                  <label for="thnTerbit" class="form-label">Tahun Terbit</label>
                  <input type="text" class="form-control" id="thnTerbit" name="thnTerbit">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
