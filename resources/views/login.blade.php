@extends('template/layouts')

@section('content')
    <div class="login shadow">
        <header>
            <h1>Login</h1>
        </header>
        <div class="form">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="username" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="password">
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection