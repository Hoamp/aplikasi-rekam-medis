@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Detail Kelengkapan pasien</h1>
                    <h5>Tanggal : {{ $kelengkapan->tanggal }}</h5>
                    <a href="{{ route('kelengkapan.cetak', $kelengkapan->id_analisis) }}" class="my-3 btn btn-secondary">Cetak</a>
                    <a href="{{ route('kelengkapan.edit', $kelengkapan->id_analisis) }}" class="my-3 btn btn-warning">Edit</a>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-2">
                                No rm
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-8">
                                {{ $kelengkapan->pasien->no_rm }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-2">
                                Nama
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-8">
                                {{ $kelengkapan->pasien->nama_pasien }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-2">
                                Umur
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-8">
                                {{ $kelengkapan->pasien->umur }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-2">
                                Alamat
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-8">
                                {{ $kelengkapan->pasien->alamat }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-2">
                                Tanggal Lahir
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-8">
                                {{ $kelengkapan->pasien->tanggal_lahir }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-2">
                                Jenis Kelamin
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-8">
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
                            @foreach ($detailKelengkapan as $d)
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
                                        @foreach ($detailKelengkapan as $d)
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
                                    @if ($kelengkapan->hasil_akhir == "Lengkap")
                                    <h3 class="text-success">{{ $kelengkapan->hasil_akhir }} 100%</h3>
                                    @else
                                    <h3 class="text-danger">Tidak Lengkap {{ $kelengkapan->hasil_akhir }}%</h3>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('kelengkapan.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection