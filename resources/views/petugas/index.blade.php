@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data petugas</h2>
                    <a href="{{ route('petugas.tambah') }}" class="btn btn-primary">Tambah petugas</a>

                    
                    @if (session()->has('success'))
                        <div class="alert alert-success my-3">{{ session('success') }}</div>
                    @endif


                    <table class="table">
                        <tr>
                            <td>Nama Petugas</td>
                            <td>Username</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach ($petugas as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->username }}</td>
                            <td>
                                <a href="{{ route('petugas.hapus', $p->id_petugas) }}" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection