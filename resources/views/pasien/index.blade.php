@extends('layouts.main')

@section('content')
    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-3">Data Pasien</h2>
                @if (auth()->user()->role == 'petugas')
                <a href="{{ route('pasien.tambah') }}" class="btn btn-primary">Tambah Pasien</a>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success my-3">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <td>No Rm</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasien as $p)
                            
                        <tr>
                            <td>{{{ $p->no_rm }}}</td>
                            <td>{{ $p->nama_pasien }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                @if (auth()->user()->role == 'petugas')
                                <a href="{{ route('pasien.delete', $p->id_pasien) }}" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
                                @endif
                                <a href="{{ route('pasien.detail', $p->id_pasien) }}" class="btn btn-secondary">Detail</a>
                            </td>
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