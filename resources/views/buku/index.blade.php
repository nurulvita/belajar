@extends('layout.header')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col text-center">
            <h1>Tabel Buku</h1>
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
            <a href="{{ route('buku.create') }}" class="btn btn-success">Tambah Buku</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">judul</th>
                    <th scope="col">penerbit</th>
                    <th scope="col">tanggal_terbit</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($buku as $value)

                  <tr>
                    <th scope="row">{{ ($buku->currentPage() - 1) * $buku->perPage() + $loop->iteration }}</th>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->penerbit}}</td>
                    <td>{{$value->tanggal_terbit}}</td>
                    <td>

                        <a href="{{ route('buku.edit', $value->id) }}" class="btn btn-primary">Edit</a>
                        <form onsubmit="return confirm('Apakah anda yakin untuk menghapus ini?')" action="{{ route('buku.destroy', $value->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
              {{ $buku->links() }}
        </div>
    </div>
</div>


@endsection
