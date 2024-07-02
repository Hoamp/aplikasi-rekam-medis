<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan kelengkapan pasien</title>
    @include('layouts.css')
</head>
<body>
    <div class="container">
        <h2 class="text-center">Laporan Hasil Analisis</h2>
        <h2 class="text-center">Kelengkapan Formulir Resume Medis</h2>

        <hr>
        <table class="table text-center">
            <thead>
                <tr>
                    <td>No Rm</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>
                    <td>No Telp</td>
                    <td>Hasil Catatan</td>
                    <td>Hasil Akhir</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelengkapan as $p)
                    
                <tr>
                    <td>{{ $p->no_rm }}</td>
                    <td>{{ $p->pasien->nama_pasien }}</td>
                    <td>{{ $p->pasien->jenis_kelamin }}</td>
                    <td>{{ $p->pasien->tanggal_lahir }}</td>
                    <td>{{ $p->pasien->no_telp }}</td>
                    <td>
                        <ul>
                            @foreach ($p->detail as $d)
                            @if ($d->nama_review == 'pencatatan')
                                @if ($d->hasil_item == "Tidak Ada")
                                    
                                    @else
                                        <li><h5>~ {{ $d->nama_review }} : {{ $d->item_review }}</h5></li>
                                    @endif
                                @else
                                    @if ($d->hasil_item == "Ada")
                                        
                                    @else
                                        <li><h5>~ {{ $d->nama_review }} : {{ $d->item_review }}</h5></li>
                                    @endif
                            @endif
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @if ($p->hasil_akhir == "Lengkap")
                        <h3 class="text-success">{{ $p->hasil_akhir }} 100%</h3>
                        @else
                        <h3 class="text-danger">Tidak Lengkap {{ $p->hasil_akhir }}%</h3>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        
    </div>
    @include('layouts.js')
</body>
</html>