@extends('layout.main')

@section('title', 'Data User')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-10">
          <h2 class="mt-3">Data User</h2>

          <a href="{{ url('users/create') }}" class="btn btn-primary my-3">Tambah Data</a>

          @if (session('status'))
          	<div class="alert alert-success">
          		{{ session('status') }}
          	</div>
          @endif

          <table class="table">
          	<thead class="thead-dark">
          		<tr>
                <th scope="col">No</th>
          			<th scope="col">Username</th>
          			<th scope="col">Email</th>
          			<th scope="col">Nama Lengkap</th>
                <th scope="col">Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach($users as $user)
          		<tr>
          			<th scope="row">1</th>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->user_email }}</td>
          			<td>{{ $user->user_nama_lengkap }}</td>
          			<td>
          				<a href="" class="badge badge-success">Edit</a>
                <form action="{{ url('users/' . $user->id) }}" method="POST" class="d-inline">
        <a href="" type="hidden" name="_method" class="badge badge-danger">Delete</a>
        @csrf
      </form>
          			</td>
          		</tr>
          		@endforeach
          	</tbody>
          </table>
        </div>
      </div>
    </div>

@endsection