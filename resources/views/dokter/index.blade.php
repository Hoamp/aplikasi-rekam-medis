@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data dokter</h2>


                    <table class="table">
                        <tr>
                            <td>Nama Dokter</td>
                            <td>Spesialis</td>
                            <td>Alamat</td>
                            <td>No Telp</td>
                        </tr>
                        <tr>
                            <td>{{ $dokter->nama_dokter }}</td>
                            <td>{{ $dokter->spesialis }}</td>
                            <td>{{ $dokter->alamat }}</td>
                            <td>{{ $dokter->no_telp }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection