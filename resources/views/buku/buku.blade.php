@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/tambahbuku" class="btn btn-primary">tambah</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php

                $no = 1;
                @endphp
                @foreach($buku as $bku)
                  <tr>
                    <th scope="row">{{ $no ++ }}</th>
                    <td>{{$bku->judul}}</td>
                    <td>{{$bku->kategori['nm_kategori']}}</td>
                    <td>{{$bku->penerbit['nm_penerbit']}}</td>
                    <td>{{$bku->penulis}}</td>
                    <td>{{$bku->thn_terbit}}</td>
                    <td>
                      <div class="d-flex flex-column">
                        <div>
                            <a href="/editBuku/{{ $bku->id }}" class="btn btn-md bg-primary text-light btn-rounded mb-2">
                                <i class="fa-solid fa-pen">Edit</i>
                            </a>
                        </div>
                        <div>
                          <form action="/deleteBuku/{{$bku->id}}" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-md bg-danger text-light btn-rounded">
                                  <i class="fa-solid fa-trash">Delete</i>
                              </button>
                          </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
