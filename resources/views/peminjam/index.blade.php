@extends('layout.header')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col text-center">
            <h1>Tabel Peminjam</h1>
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
            <a href="{{ route('peminjam.create') }}" class="btn btn-info">Tambah Peminjam</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-3">
            <p>Cari Tanggal Pinjam</p>

            <form action="{{ route('peminjam.cari') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Tanggal Awal</label>
                    <input name="awal" type="date" class="form-control" id="nama" value="{{ old('awal')}}" required>
                    <div id="cari" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Tanggal Akhir</label>
                    <input name="akhir" type="date" class="form-control" id="nama" value="{{ old('akhir')}}" required>
                    <div id="cari" class="form-text"></div>
                </div>
                <div class="form-check">
                    <input name="laporan" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                      Laporan
                    </label>
                  </div>
                {{-- <input type="date" name="cari2" value="{{ old('cari')}}"> --}}
                <input type="submit" value="Cari">
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">judul</th>
                    <th scope="col">tanggal pinjam</th>
                    <th scope="col">tanggal kembali</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($peminjam as $value)

                  <tr>
                    <th scope="row">{{ ($peminjam->currentPage() - 1) * $peminjam->perPage() + $loop->iteration }}</th>
                    <td>{{$value->nama_peminjam}}</td>
                    <td>{{$value->judul_buku}}</td>
                    <td>{{$value->tanggal_pinjam}}</td>
                    <td>{{$value->tanggal_kembali}}</td>
                    <td>

                        <a href="{{ route('peminjam.edit', $value->id) }}" class="btn btn-primary">Edit</a>
                        <form onsubmit="return confirm('Apakah anda yakin untuk menghapus ini?')" action="{{ route('peminjam.destroy', $value->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
              {{ $peminjam->links() }}
        </div>
    </div>
</div>


@endsection
