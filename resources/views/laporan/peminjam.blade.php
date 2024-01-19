<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>biodata</title>
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        </style>
    </head>
        <body>
            <h1>Laporan Peminjam</h1>
            <table class="styled-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">judul</th>
                    <th scope="col">tanggal pinjam</th>
                    <th scope="col">tanggal kembali</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($peminjam as $value)

                  <tr>
                    <th scope="row">{{$loop->iteration }}</th>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->tanggal_pinjam}}</td>
                    <td>{{$value->tanggal_kembali}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
        </body>
</html>
