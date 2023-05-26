@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/tambahkategori" class="btn btn-primary">tambah</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php

                $no = 1;
                @endphp
                @foreach($kategori as $kat)
                  <tr>
                    <th scope="row">{{ $no ++ }}</th>
                    <td>{{$kat->nm_kategori}}</td>
                    <td>
                      <div class="d-flex flex-column">
                        <div>
                            <a href="/editkategori/{{ $kat->id }}" class="btn btn-md bg-primary text-light btn-rounded mb-2">
                                <i class="fa-solid fa-pen">Edit</i>
                            </a>
                        </div>
                        <div>
                          <form action="/deletekategori/{{$kat->id}}" method="POST">
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
