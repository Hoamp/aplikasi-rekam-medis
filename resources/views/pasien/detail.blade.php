@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data pasien</h2>


                    <table>
                        <tr>
                            <td>Nama </td>
                            <td> : </td>
                            <td> {{ $pasien->nama_pasien }}</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td> : </td>
                            <td> {{ $pasien->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon </td>
                            <td> : </td>
                            <td> {{ $pasien->no_telp }}</td>
                        </tr>
                        <tr>
                            <td>Agama </td>
                            <td> : </td>
                            <td> {{ $pasien->agama }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin </td>
                            <td> : </td>
                            <td> {{ $pasien->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Umur </td>
                            <td> : </td>
                            <td> {{ $pasien->umur }}</td>
                        </tr>
                    </table>

                    
                <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
@endsection