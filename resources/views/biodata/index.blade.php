@extends('layout.header')

@section('content')
<div class="row mt-3">
    <div class="col text-center">
        <h1>Tabel Biodata</h1>
        @if (session()->has('berhasil'))
        <br>
        <div class="alert alert-primary mt-2">
            {{session('berhasil')}}
            </div>
        @endif


    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('biodata.create') }}" class="btn btn-success">Add</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">email</th>
                <th scope="col">alamat</th>
                <th scope="col">no hp</th>
                <th scope="col">kota</th>
                <th scope="col">aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($bio as $value)

              <tr>
                <th scope="row">{{ ($bio->currentPage() - 1) * $bio->perPage() + $loop->iteration }}</th>
                <td>{{$value->nama}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->no_hp}}</td>
                <td>{{$value->kota}}</td>
                <td>

                    <a href="{{ route('biodata.edit', $value->id) }}" class="btn btn-warning">Edit</a>
                    <form onsubmit="return confirm('Apakah anda yakin untuk menghapus ini?')" action="{{ route('biodata.destroy', $value->id) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
          {{ $bio->links() }}
    </div>
</div>

@endsection
