@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data dokter</h2>
                    <a href="{{ route('dokter.tambah') }}" class="btn btn-primary">Tambah dokter</a>

                    <table class="table">
                        <tr>
                            <td>Nama Dokter</td>
                            <td>Spesialis</td>
                            <td>Alamat</td>
                            <td>No Telp</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach ($dataDokter as $dokter)
                            <tr>
                                <td>{{ $dokter->nama_dokter }}</td>
                                <td>{{ $dokter->spesialis }}</td>
                                <td>{{ $dokter->alamat }}</td>
                                <td>{{ $dokter->no_telp }}</td>
                                <td>
                                    <a href="{{ route('dokter.hapus', $dokter->id_dokter) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection