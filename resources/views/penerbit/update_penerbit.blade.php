@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="/savepenerbit/{{$update->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label for="nama" class="form-label">Nama Penerbit</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$update->nm_penerbit}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="/penerbit/penerbit">Batal</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection