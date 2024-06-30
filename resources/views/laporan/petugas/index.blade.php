@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data petugas</h2>

                    <a href="{{ route('laporan.petugas.cetak') }}" class="btn btn-primary">Cetak</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Username</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($petugas as $p)
                                
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->username }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection