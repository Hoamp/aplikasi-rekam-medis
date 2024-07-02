@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data kelengkapan</h2>

                    <a href="{{ route('laporan.kelengkapan.cetak') }}" class="btn btn-primary">Cetak</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <td>No Rm</td>
                                <td>Nama pasien</td>
                                <td>Hasil catatan</td>
                                <td>Hasil akhir</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelengkapan as $p)
                                
                            <tr>
                                <td>{{ $p->no_rm }}</td>
                                <td>{{ $p->pasien->nama_pasien }}</td>
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
            </div>
        </div>
    </div>
@endsection