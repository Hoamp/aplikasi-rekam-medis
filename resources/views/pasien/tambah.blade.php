@extends('layouts.main')

@section('content')
    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2>Tambah Pasien</h2>
                <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>

                
                <form action="{{ route('pasien.store') }}" class="mt-4" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="">no rm</label>
                        <input type="text" name="no_rm" class="form-control">
                        @error('no_rm')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">nama pasien</label>
                        <input type="text" name="nama_pasien" class="form-control">
                        @error('nama_pasien')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-2">
                        <label for="">jenis kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="">agama</label>
                        <select name="agama" id="" class="form-control">
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                            <option value="katolik">katolik</option>
                            <option value="hindhu">hindhu</option>
                            <option value="budha">budha</option>
                            <option value="kong hu chu">kong hu chu</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="">alamat</label>
                        <input type="text" name="alamat" class="form-control">
                        @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">tempat lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control">
                        @error('tempat_lahir')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="">tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                        @error('tanggal_lahir')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="">umur</label>
                        <input type="number" name="umur" class="form-control">
                        @error('umur')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="">no telp</label>
                        <input type="text" name="no_telp" class="form-control">
                        @error('no_telp')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah pasien</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection