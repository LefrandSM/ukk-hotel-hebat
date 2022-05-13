@if ($status == 'admin')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-xl-5">
                <h1>HOTEL HEBAT</h1>
            </div>
            <div class="col-xl-1 d-flex align-items-end">
                <h4>Admin</h4>
            </div>
            <div class="col-xl-6 d-flex align-items-end">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'text-dark' : '' }}" aria-current="page" href="/admin">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/kamar*') ? 'text-dark' : '' }}" aria-current="page" href="/admin/kamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/fasilitas-kamar*') ? 'text-dark' : '' }}" href="/admin/fasilitas-kamar">Fasilitas Kamar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/fasilitas-hotel*') ? 'text-dark' : '' }}" href="/admin/fasilitas-hotel">Fasilitas Hotel</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@elseif ($status == 'tamu')
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-xl-8">
                <h1>HOTEL HEBAT</h1>
            </div>
            <div class="col-xl-4 d-flex align-items-end justify-content-end">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'text-dark' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('kamar*') ? 'text-dark' : '' }}" aria-current="page" href="/kamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('fasilitas*') ? 'text-dark' : '' }}" href="/fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@elseif ($status == 'resepsionis')
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-xl-7">
                <h1>HOTEL HEBAT</h1>
            </div>
            <div class="col-xl-1 d-flex align-items-end">
                <h4>Resepsionis</h4>
            </div>
            <div class="col-xl-4 d-flex align-items-end justify-content-end">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('resepsionis') ? 'text-dark' : '' }}" aria-current="page" href="/resepsionis">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('resepsionis/fasilitas-kamar*') ? 'text-dark' : '' }}" href="/resepsionis/fasilitas-kamar">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('resepsionis/reservasi*') ? 'text-dark' : '' }}" aria-current="page" href="/resepsionis/reservasi">Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif