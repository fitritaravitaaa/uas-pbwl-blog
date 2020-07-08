@extends('layout.main')

@section('title', 'Tambah Data User')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Tambah Data User</h2>

          <form method="post" action="{{ url('users') }}">
            @csrf
            <div class="form-group">
              <label for="user_name">Username</label>
              <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" id="user_name" placeholder="Masukkan Username">
              @error('user_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="user_password">Password</label>
              <input type="password" class="form-control @error('user_password') is-invalid @enderror" name="user_password" id="user_password" placeholder="Masukkan Password">
              @error('user_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="user_email">Email</label>
              <input type="text" class="form-control @error('user_email') is-invalid @enderror" name="user_email" id="user_email" placeholder="Masukkan Email">
              @error('user_email')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="user_nama_lengkap">Nama Lengkap</label>
              <input type="text" class="form-control @error('user_nama_lengkap') is-invalid @enderror" name="user_nama_lengkap" id="user_nama_lengkap" placeholder="Masukkan Nama Lengkap">
              @error('user_nama_lengkap')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('users') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>

@endsection