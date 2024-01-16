@extends('layout.header')

@section('content')

<div class="row">
    <div class="col">
        <h1>Form Tambah Buku</h1>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input name="judul" type="text" class="form-control" id="judul" value="{{ old('judul')}}" required>
                <div id="judul" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input name="penerbit" type="text" class="form-control" id="penerbit" value="{{ old('penerbit')}}" required>
                <div id="penerbit" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                <input name="tanggal_terbit" type="date" class="form-control" id="tanggal_terbit" value="{{ old('tanggal_terbit')}}" required>
                <div id="tanggal_terbit" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn yellow">Reset</button>
        </form>
    </div>
</div>

@endsection
