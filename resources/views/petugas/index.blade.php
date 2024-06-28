@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>Data petugas</h2>

                    <table class="table">
                        <tr>
                            <td>Nama Petugas</td>
                            <td>Username</td>
                            <td>Password</td>
                        </tr>
                        @foreach ($petugas as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->username }}</td>
                            <td>petugas{{ $loop->iteration }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection