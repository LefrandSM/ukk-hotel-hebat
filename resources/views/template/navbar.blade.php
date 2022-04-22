@if ($status == 'admin')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-xl-6">
                <h1>Hotel Hebat</h1>
            </div>
            <div class="col-xl-1 d-flex align-items-end">
                <h4>Admin</h4>
            </div>
            <div class="col-xl-5 d-flex align-items-end">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'text-dark' : '' }}" aria-current="page" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/kamar*') ? 'text-dark' : '' }}" aria-current="page" href="/admin/kamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/fasilitas-kamar*') ? 'text-dark' : '' }}" href="/admin/fasilitas-kamar">Fasilitas Kamar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Fasilitas Hotel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif