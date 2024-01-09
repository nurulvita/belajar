@extends('layout.header')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nama</th>
        <th scope="col">email</th>
        <th scope="col">alamat</th>
        <th scope="col">no hp</th>
        <th scope="col">kota</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($bio as $value)

      <tr>
        <th scope="row">{{ ($bio->currentPage() - 1) * $bio->perPage() + $loop->iteration }}</th>
        <td>{{$value->nama}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->alamat}}</td>
        <td>{{$value->no_hp}}</td>
        <td>{{$value->kota}}</td>
      </tr>

      @endforeach
    </tbody>
  </table>
  {{ $bio->links() }}
@endsection
