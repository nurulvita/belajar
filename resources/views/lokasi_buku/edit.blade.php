@extends('layout.header')

@section('content')

<div class="container">
<div class="row">
    <div class="col">
        <h1>Form Edit Lokasi Buku</h1>
        <form action="{{ route('lokasi.update', $peminjam->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                <input name="kode_buku" type="text" class="form-control" id="kode_buku" value="{{ $peminjam->kode_buku}}" required>
                <div id="kode_buku" class="form-text"></div>
                @error('kode_buku')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_rak" class="form-label">No rak</label>
                <input name="no_rak" type="text" class="form-control" id="no_rak" value="{{ $peminjam->no_rak}}" required>
                <div id="no_rak" class="form-text"></div>
                @error('no_rak')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="section" class="form-label">Tm</label>
                <input name="section" type="date" class="form-control" id="section" value="{{ $peminjam->section}}" required>
                <div id="section" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            <button type="reset" class="btn btn-outline-warning">Reset</button>
        </form>

    </div>
</div>
</div>

@endsection
