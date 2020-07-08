@extends('layout.main')

@section('title', 'Edit Data Artist')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Edit Data Artist</h2>

          <form method="post" action="{{ $artist->artist_id }}">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('artist_name') is-invalid @enderror" name="artist_name" id="artist_name" placeholder="Masukkan Nama" value="{{ $artist->artist_name }}">
              @error('artist_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ubah Data</button>
            <a href="{{ url('artist') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>

@endsection