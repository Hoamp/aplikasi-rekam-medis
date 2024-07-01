@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data formulir</h2>
                    <a href="{{ route('formulir.create') }}" class="btn btn-primary">Tambah formulir</a>

                    @if (session()->has('success'))
                        <div class="alert alert-success my-3">{{ session('success') }}</div>
                    @endif

                    
                    <table class="table">
                        <tr>
                            <td>Id Formulir</td>
                            <td>Nama Formulir</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach ($formulir as $p)
                            <tr>
                                <td>{{ $p->id_formulir }}</td>
                                <td>{{ $p->nama_formulir }}</td>
                                <td>
                                    @if ($p->id_formulir == 1)
                                        
                                    @else
                                    <a href="{{ route('formulir.hapus', $p->id_formulir) }}" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection