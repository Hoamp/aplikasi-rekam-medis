<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pasien</title>
    @include('layouts.css')
</head>
<body>
    <div class="container">
        <h1 class="text-center">Laporan Pasien Klinik</h1>
        <h1 class="text-center">Dokter Agung Prihananto</h1>

        <hr>
        <table class="table text-center">
            <thead>
                <tr>
                    <td>No Rm</td>
                    <td>Nama</td>
                    <td>Umur</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>
                    <td>Agama</td>
                    <td>Alamat</td>
                    <td>No Telp</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $p)
                    
                <tr>
                    <td>{{ $p->no_rm }}</td>
                    <td>{{ $p->nama_pasien }}</td>
                    <td>{{ $p->umur }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>{{ $p->tanggal_lahir }}</td>
                    <td>{{ $p->agama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_telp }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        
    </div>
    @include('layouts.js')
</body>
</html>