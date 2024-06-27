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
    <div class="container mt-5">

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Login Form</h4>
                    </div>
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger col-md-12">{{ session('loginError') }}</div>
                    @endif

                    <form action="{{ route('authenticate') }}" method="POST" class="p-4">
                        @csrf
                        <div class="mb-2">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary col-md-12">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.js')
</body>
</html>