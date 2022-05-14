@if ($status == 'admin')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-xl-3">
                <h1>HOTEL HEBAT</h1>
            </div>
            <div class="col-xl-9 d-flex justify-content-end">
                <ul class="nav">
                    <li class="nav-item">
                        <h4 class="nav-link text-dark">Admin</h4>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'text-dark' : '' }}" aria-current="page" href="/admin">Dashboard <i class="fa-solid fa-gauge-high"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/kamar*') ? 'text-dark' : '' }}" aria-current="page" href="/admin/kamar">Kamar <i class="fa-solid fa-bed"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/fasilitas-kamar*') ? 'text-dark' : '' }}" href="/admin/fasilitas-kamar">Fasilitas Kamar <i class="fa-solid fa-door-closed"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/fasilitas-hotel*') ? 'text-dark' : '' }}" href="/admin/fasilitas-hotel">Fasilitas Hotel <i class="fa-solid fa-hotel"></i></a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-danger">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
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
                    <a class="nav-link {{ Request::is('/') ? 'text-dark' : '' }}" aria-current="page" href="/">Home <i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('kamar*') ? 'text-dark' : '' }}" aria-current="page" href="/kamar">Kamar <i class="fa-solid fa-bed"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('fasilitas*') ? 'text-dark' : '' }}" href="/fasilitas">Fasilitas <i class="fa-solid fa-hotel"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@elseif ($status == 'resepsionis')
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-xl-4">
                <h1>HOTEL HEBAT</h1>
            </div>
            <div class="col-xl-8 d-flex justify-content-end align-items-baseline">
                <ul class="nav">
                    <li class="nav-item">
                        <h4 class="nav-link text-dark">Resepsionis</h4>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('resepsionis') ? 'text-dark' : '' }}" aria-current="page" href="/resepsionis">Dashboard <i class="fa-solid fa-gauge-high"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('resepsionis/fasilitas-kamar*') ? 'text-dark' : '' }}" href="/resepsionis/fasilitas-kamar">Fasilitas <i class="fa-solid fa-door-closed"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('resepsionis/reservasi*') ? 'text-dark' : '' }}" aria-current="page" href="/resepsionis/reservasi">Reservasi <i class="fa-solid fa-receipt"></i></a>
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
@endif