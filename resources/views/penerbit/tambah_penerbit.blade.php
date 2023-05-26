@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="storepenerbit" method="post">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Penerbit</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
