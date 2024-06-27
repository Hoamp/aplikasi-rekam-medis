@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data dokter</h2>


                    <table>
                        <tr>
                            <td>Nama </td>
                            <td> : </td>
                            <td> {{ $dokter->nama_dokter }}</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td> : </td>
                            <td> {{ $dokter->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Spesialis </td>
                            <td> : </td>
                            <td> {{ $dokter->spesialis }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon </td>
                            <td> : </td>
                            <td> {{ $dokter->no_telp }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection