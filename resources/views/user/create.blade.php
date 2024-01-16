@extends('layout.header')

@section('content')
<div class="row">
    <div class="col">
        <h1>Form Tambah User</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ old('name')}}" required>
                <div id="name" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="{{ old('email')}}" required>
                <div id="email" class="form-text"></div>
                @error('email')
                <div class="alert alert-danger mt-2">
                {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" value="{{ old('password')}}" required>
                <div id="password" class="form-text"></div>
                @error('password')
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
