@extends('template/layouts')

@section('content')
    <div class="login shadow">
        <header>
            <h1 class="display-2">Login</h1>
        </header>
        @if (session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('gagal') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="form">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label"><i class="fa-solid fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autocomplete="off">
                    @error('username')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
            <div class="link text-center">
                <a href="/" class=" text-decoration-none"><i class="fa-solid fa-chevron-left"></i> Kembali ke halaman home</a>
            </div>
        </div>
    </div>
@endsection