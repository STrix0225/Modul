<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CIBADUYUT SHOES</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Bagian dalam collapse (Wishlist + Mode Gelap) -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                @if(session()->has('user'))
                    <span class="text-white me-3">
                        {{ session('user') }}
                    </span>
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">
                        Logout
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning btn-sm">
                        Login
                    </a>
                @endif
                <button
                    class="btn btn-outline-warning btn-sm me-2"
                    data-bs-toggle="modal"
                    data-bs-target="#wishlistModal"
                >
                    ⭐ Wishlist (<span id="wishlist-count">0</span>)
                </button>
                <button id="btn-theme" class="btn btn-outline-light btn-sm">
                    Mode Gelap
                </button>
            </div>

        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero text-center text-white d-flex align-items-center">
        <div class="container">
            <h1>Sistem Manajemen Sepatu</h1>
            <p>Kelola data sepatu dengan mudah.</p>
        </div>
    </div>

    <!-- Dashboard -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5>Total Produk</h5>
                        <h2>12</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5>Stok Tersedia</h5>
                        <h2>85</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5>Kategori</h5>
                        <h2>3</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Wishlist -->
    <div class="modal fade" id="wishlistModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">⭐ Daftar Wishlist Sepatu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="wishlistItems"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger" id="btnKosongkanWishlist">Kosongkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Sepatu -->
    <div class="container mt-5">
        <h3 class="mb-4">Daftar Sepatu</h3>
        <div class="row">

            <!-- Produk 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/NIKE_P_6000.jpg') }}" class="card-img-top" alt="Nike P 6000">
                    <div class="card-body">
                        <h5 class="card-title">Nike P 6000</h5>
                        <p class="card-text">Harga: Rp 1.420.000</p>
                        <p class="card-text stok-text">Stok: 10</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-detail w-50 me-2">Beli</button>
                            <button class="btn btn-outline-danger btn-wishlist w-50" data-nama="Nike P 6000">❤️ Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/AIR_FORCE_1.jpg') }}" class="card-img-top" alt="Nike Air Force 1">
                    <div class="card-body">
                        <h5 class="card-title">Nike Air Force 1</h5>
                        <p class="card-text">Harga: Rp 1.529.000</p>
                        <p class="card-text stok-text">Stok: 7</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-detail w-50 me-2">Beli</button>
                            <button class="btn btn-outline-danger btn-wishlist w-50" data-nama="Nike Air Force 1">❤️ Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/AIR_JORDAN_1_LOW.jpg') }}" class="card-img-top" alt="Nike Air Jordan 1 Low">
                    <div class="card-body">
                        <h5 class="card-title">Nike Air Jordan 1</h5>
                        <p class="card-text">Harga: Rp 2.500.000</p>
                        <p class="card-text stok-text">Stok: 5</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-detail w-50 me-2">Beli</button>
                            <button class="btn btn-outline-danger btn-wishlist w-50" data-nama="Nike Air Jordan 1">❤️ Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">© 2026 Sistem Manajemen Sepatu Cibaduyut</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>