<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Login</title>
    @include('layouts.css')
</head>
<body>
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/logos/klinik.png') }}"  alt="" class="text-center" width="420px">  
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body shadow">
                        <h2 class="text-center fw-bolder">Klinik Dokter</h2>
                        <h2 class="text-center mb-3 fw-bolder">Agung Prihananto</h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body " style="background-color: rgb(227, 221, 221) ">
                        <h4 class="text-center">Login </h4>
                    
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger col-md-12 ">{{ session('loginError') }}</div>
                    @endif

                    <form action="{{ route('authenticate') }}" method="POST" class="p-4">
                        @csrf
                        <div class="mb-2">
                            <h5 for="" class="fw-bolder">Username</h5>
                            <input type="text" class="form-control bg-primary text-white" name="username">
                        </div>
                        <div class="mb-5">
                            <h5 for="" class="fw-bolder">Password</h5>
                            <input type="password" class="form-control bg-primary text-white" name="password">
                        </div>
                        <button type="submit" class="btn btn-secondary col-md-12">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @include('layouts.js')
</body>
</html>