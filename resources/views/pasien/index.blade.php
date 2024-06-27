@extends('layouts.main')

@section('content')
    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2>Daftar Pasien</h2>
                <a href="{{ route('pasien.tambah') }}" class="btn btn-primary">Tambah Pasien</a>
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasien as $p)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama_pasien }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <a href="{{ route('pasien.delete', $p->no_rm) }}" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
                                <a href="{{ route('pasien.detail', $p->no_rm) }}" class="btn btn-secondary">Detail</a>
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