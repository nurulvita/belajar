@extends('layout.header')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col text-center">
            <h1>Tabel Lokasi Buku</h1>
            @if (session()->has('berhasil'))
            <br>
            <div class="alert alert-primary mt-2">
                {{session('berhasil')}}
                </div>
            @endif


        </div>
    </div>
    <div class="row">
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{ route('lokasi.create') }}" class="btn btn-info">Tambah Lokasi Buku</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">No Rak</th>
                    <th scope="col">Section</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($lokasi as $value)

                  <tr>
                    <th scope="row">{{ ($lokasi->currentPage() - 1) * $lokasi->perPage() + $loop->iteration }}</th>
                    <td>{{$value->kode_buku}}</td>
                    <td>{{$value->no_rak}}</td>
                    <td>{{$value->section}}</td>
                    <td>

                        <a href="{{ route('lokasi.edit', $value->id) }}" class="btn btn-primary">Edit</a>
                        <form onsubmit="return confirm('Apakah anda yakin untuk menghapus ini?')" action="{{ route('lokasi.destroy', $value->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
              {{ $lokasi->links() }}
        </div>
    </div>
</div>


@endsection
