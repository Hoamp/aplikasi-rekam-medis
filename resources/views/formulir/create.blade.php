@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Tambah data formulir</h2>

                    <form action="{{ route('formulir.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection