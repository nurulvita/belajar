@extends('layout.header')

@section('content')

<div class="container">
<div class="row">
    <div class="col">
        <h1>Form Edit Peminjam</h1>
        <form action="{{ route('peminjam.update', $peminjam->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label">nama_peminjam</label>
                <input name="nama_peminjam" type="text" class="form-control" id="nama_peminjam" value="{{ $peminjam->nama_peminjam}}" required>
                <div id="nama_peminjam" class="form-text"></div>
                @error('nama_peminjam')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input name="judul_buku" type="text" class="form-control" id="judul_buku" value="{{ $peminjam->judul_buku}}" required>
                <div id="judul_buku" class="form-text"></div>
                @error('judul_buku')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                <input name="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam" value="{{ $peminjam->tanggal_pinjam}}" required>
                <div id="tanggal_pinjam" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                <input name="tanggal_kembali" type="date" class="form-control" id="tanggal_kembali" value="{{ $peminjam->tanggal_kembali}}" required>
                <div id="tanggal_kembali" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            <button type="reset" class="btn btn-outline-warning">Reset</button>
        </form>

    </div>
</div>
</div>

@endsection
