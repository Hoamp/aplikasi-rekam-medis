@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data pasien</h2>


                    <table class="table">
                        <tr>
                            <td>No Rm </td>
                            <td>Nama Pasien </td>
                            <td>Umur </td>
                            <td>Jenis Kelamin </td>
                            <td>Tempat Lahir </td>
                            <td>Alamat </td>
                            <td>Agama </td>
                            <td>Tanggal Lahir </td>
                            <td>No Telp </td>
                        </tr>
                        <tr>
                            <td>{{ $pasien->no_rm }}</td>
                            <td>{{ $pasien->nama_pasien }}</td>
                            <td>{{ $pasien->umur }}</td>
                            <td>{{ $pasien->jenis_kelamin }}</td>
                            <td>{{ $pasien->tempat_lahir }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            <td>{{ $pasien->agama }}</td>
                            <td>{{ $pasien->tanggal_lahir }}</td>
                            <td>{{ $pasien->no_telp }}</td>
                        </tr>
                    </table>

                    
                <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
@endsection