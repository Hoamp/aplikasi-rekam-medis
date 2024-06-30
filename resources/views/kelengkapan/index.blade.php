@extends('layouts.main')

@section('content')
    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2>Pilih Pasien</h2>
                <div class="row">
                    <div class="col-md-4">
                        <form action="">
                            <label for="">Cari pasien</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="cari" placeholder="Cari berdasarkan No Rm">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success" >Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
                            <td>{{ $p->no_rm }}</td>
                            <td>{{ $p->nama_pasien }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                @if (auth()->user()->role == "petugas")
                                    @if (count($p->kelengkapan) > 0)
                                    <a href="{{ route('kelengkapan.detail', $p->kelengkapan->first()->id_analisis) }}" class="btn btn-warning">Detail Kelengkapan</a>
                                    @else
                                    <a href="{{ route('kelengkapan.tambah', $p->id_pasien) }}" class="btn btn-secondary">Kelengkapan</a>
                                    @endif
                                @endif
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