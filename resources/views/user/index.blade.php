@extends('layout.header')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col text-center">
            <h1>Tabel User</h1>
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
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($user as $value)

                  <tr>
                    <th scope="row">{{ ($user->currentPage() - 1) * $user->perPage() + $loop->iteration }}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->password}}</td>
                    <td>

                        <a href="{{ route('user.edit', $value->id) }}" class="btn btn-primary">Edit</a>
                        <form onsubmit="return confirm('Apakah anda yakin untuk menghapus ini?')" action="{{ route('user.destroy', $value->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
              {{ $user->links() }}
        </div>
    </div>
</div>


@endsection
