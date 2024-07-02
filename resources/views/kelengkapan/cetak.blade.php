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
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-2">
                                No rm
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                {{ $kelengkapan->pasien->no_rm }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-2">
                                Nama
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                {{ $kelengkapan->pasien->nama_pasien }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-2">
                                Umur
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                {{ $kelengkapan->pasien->umur }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-2">
                                Alamat
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                {{ $kelengkapan->pasien->alamat }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-2">
                                Tanggal Lahir
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                {{ $kelengkapan->pasien->tanggal_lahir }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-2">
                                Jenis Kelamin
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                {{ $kelengkapan->pasien->jenis_kelamin }}
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Review</td>
                                <td>Item Review</td>
                                <td>Hasil Item</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelengkapan->detail as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->nama_review }}</td>
                                    <td>{{ $d->item_review }}</td>
                                    <td>{{ $d->hasil_item }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <td><h4>Hasil Catatan (Tidak ada)</h4></td>
                                <td><h4>Hasil Akhir</h4></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        @foreach ($kelengkapan->detail as $d)
                                            @if ($d->hasil_item !== "Ada")
                                                @if ($d->nama_review == 'pencatatan' && $d->hasil_item == "Tidak Ada")
                                                    
                                                @else
                                                    <li><h5>~ {{ $d->nama_review }} : {{ $d->item_review }}</h5></li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    @if ($kelengkapan->hasil_akhir == "Lengkap")
                                    <h3 class="text-success">{{ $kelengkapan->hasil_akhir }} 100%</h3>
                                    @else
                                    <h3 class="text-danger">Tidak Lengkap {{ $kelengkapan->hasil_akhir }}%</h3>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
        
        
    </div>
    @include('layouts.js')
</body>
</html>