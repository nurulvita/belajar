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
                <input name="kode_buku" type="text" class="form-control" id="kode_buku" value="{{ old('kode_buku')}}" required>
                <div id="kode_buku" class="form-text"></div>
                @error('kode_buku')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_rak" class="form-label">No Rak</label>
                <select class="form-select form-select-sm" aria-label="Small select example" id="no_rak" name="no_rak" required>
                    <option value="" disabled selected>Pilih Lokasi Buku</option>
                    <option value="A1" @if(old('no_rak') == 'A1') selected @endif>A1</option>
                    <option value="B1" @if(old('no_rak') == 'B1') selected @endif>B1</option>
                    <option value="C1" @if(old('no_rak') == 'C1') selected @endif>C1</option>
                </select>
                @error('no_rak')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input name="section" type="text" class="form-control" id="penerbit" value="{{ old('section')}}" required>
                <div id="section" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn yellow">Reset</button>
        </form>
        </div>
    </div>
</div>

@endsection
