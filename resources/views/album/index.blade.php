@extends('layout.main')

@section('title', 'Daftar Album')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-10">
          <h2 class="mt-3">Data Album</h2>

          <a href="{{ url('album/create') }}" class="btn btn-primary my-3">Tambah Data</a>

          @if (session('status'))
          	<div class="alert alert-success">
          		{{ session('status') }}
          	</div>
          @endif

          <table class="table">
          	<thead class="thead-dark">
          		<tr>
          			<th scope="col">No</th>
          			<th scope="col">Nama Artist</th>
          			<th scope="col">Nama Album</th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach($album as $alb)
          		<tr>
          			<th scope="row">1</th>
          			<td>{{ $alb->album_artist_id }}</td>
                <td>{{ $alb->album_name }}</td>
          			<td>
          				<a href="" class="badge badge-success">Edit</a>
                <form action="{{ url('album/' . $alb->album_id) }}" method="POST" class="d-inline">
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