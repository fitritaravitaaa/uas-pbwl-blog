@extends('layout.main')

@section('title', 'Data Artist')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-10">
          <h2 class="mt-3">Data Artist</h2>

          <a href="{{ url('artist/create') }}" class="btn btn-primary my-3">Tambah Data</a>

          @if (session('status'))
          	<div class="alert alert-success">
          		{{ session('status') }}
          	</div>
          @endif

          <table class="table">
          	<thead class="thead-dark">
          		<tr>
          			<th scope="col">No</th>
          			<th scope="col">Nama</th>
          			<th scope="col">Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach($artist as $art)
          		<tr>
          			<th scope="row">1</th>
          			<td>{{ $art->artist_name }}</td>
          			<td>
          				<a href="" class="badge badge-success">Edit</a>
                <form action="{{ url('artist/' . $art->artist_id) }}" method="POST" class="d-inline">
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