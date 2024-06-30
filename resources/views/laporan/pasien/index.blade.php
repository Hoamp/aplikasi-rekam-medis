@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data pasien</h2>

                    <a href="{{ route('laporan.pasien.cetak') }}" class="btn btn-primary">Cetak</a>

                    <table class="table">
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
            </div>
        </div>
    </div>
@endsection