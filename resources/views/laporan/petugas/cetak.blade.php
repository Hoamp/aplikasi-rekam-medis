<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Petugas</title>
    @include('layouts.css')
</head>
<body>
    <div class="container">
        <h1 class="text-center">Laporan Petugas Klinik</h1>
        <h1 class="text-center">Dokter Agung Prihananto</h1>

        <hr>
        <table class="table text-center">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Username</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($petugas as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->username }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        
    </div>
    @include('layouts.js')
</body>
</html>