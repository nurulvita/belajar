@extends('layout.header')

@section('content')

<div class="row">
    <div class="col">
        <div class = container>
        <h1>Form Tambah Peminjam</h1>
        <form action="{{ route('peminjam.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama_peminjam" type="text" class="form-control" id="nama" value="{{ old('nama_peminjam')}}" required>
                <div id="nama_peminjam" class="form-text"></div>
                @error('nama_peminjam')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input name="judul_buku" type="text" class="form-control" id="judul_buku" value="{{ old('judul_buku')}}" required>
                <div id="judul_buku" class="form-text"></div>
                @error('judul_buku')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                <input name="tanggal_pinjam" type="date" class="form-control" id="penerbit" value="{{ old('tanggal_pinjam')}}" required>
                <div id="tanggal_pinjam" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                <input name="tanggal_kembali" type="date" class="form-control" id="tanggal_kembali" value="{{ old('tanggal_kembali')}}" required>
                <div id="tanggal_kembali" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn yellow">Reset</button>
        </form>
        </div>
    </div>
</div>

@endsection
