@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data pasien</h2>

                    <form action="{{ route('laporan.pasien.cetak') }}" method="POST">
                        @csrf   
                        <label for="">Cari pasien</label>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="cari" placeholder="Cari No Rm / Nama">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success" >Cari</button>
                            </div>
                        </div>
                    </form>

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
                    {{ $pasien->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection