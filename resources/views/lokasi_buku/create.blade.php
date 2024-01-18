@extends('layout.header')

@section('content')

<div class="row">
    <div class="col">
        <div class = container>
        <h1>Form Tambah Lokasi Buku</h1>
        <form action="{{ route('lokasi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                <input name="kode_buku" type="text" class="form-control" id="nama" value="{{ old('kode_buku')}}" required>
                <div id="kode_buku" class="form-text"></div>
                @error('kode_buku')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_rak" class="form-label">No Rak</label>
                <input name="no_rak" type="text" class="form-control" id="no_rak" value="{{ old('no_rak')}}" required>
                <div id="no_rak" class="form-text"></div>
                @error('no_rak')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input name="section" type="date" class="form-control" id="penerbit" value="{{ old('section')}}" required>
                <div id="section" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn yellow">Reset</button>
        </form>
        </div>
    </div>
</div>

@endsection
