@extends('layout.header')

@section('content')

<div class="row">
    <div class="col">
        <h1>Form Tambah Biodata</h1>
        <form action="{{ route('biodata.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" value="{{ old('nama')}}" required>
                <div id="nama" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" value="{{ old('email')}}" required>
              <div id="email" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label><br>
                <textarea name="alamat" style="width:600px; height:100px;">{{old('alamat')}}</textarea>
              </div>
            <div class="mb-3">
              <label for="phone" class="form-label">No Telepon</label>
              <input name="no_hp" type="tel" class="form-control" id="phone" name="phone" value="{{ old('no_hp')}}">
              <div id="telp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input name="kota" type="kota" class="form-control" id="kota" value="{{ old('kota')}}">
                <div id="kota" class="form-text"></div>
                @error('kota')
                    <div class="alert alert-danger mt-2">
                    {{$message}}
                    </div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn yellow">Reset</button>

          </form>
    </div>
</div>
@endsection
