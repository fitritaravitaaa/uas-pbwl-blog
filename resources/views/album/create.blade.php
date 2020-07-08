@extends('layout.main')

@section('title', 'Tambah Data Album')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Tambah Data Album</h2>

          <form method="post" action="{{ url('album') }}">
            @csrf
            <div class="form-group">
              <label for="album_artist_id">Nama Artist</label>
              <input type="text" class="form-control @error('album_artist_id') is-invalid @enderror" name="album_artist_id" id="album_artist_id" placeholder="Masukkan Nama Artist">
              @error('album_artist_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="album_nameme">Nama Album</label>
              <input type="text" class="form-control @error('album_name') is-invalid @enderror" name="album_artist_id" id="album_artist_id" placeholder="Masukkan Nama Album">
              @error('artist_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('album') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>

@endsection