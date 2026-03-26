<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'HuniopiaGoods') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand fw-bold" href="/">
                <span class="brand-main">Huniopia</span>Goods
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#kategori">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#inspirasi">Inspirasi</a>
                    </li>

                </ul>

                <a href="/#inspirasi" class="btn btn-sm btn-primary-custom">
                    Mulai
                </a>
            </div>

        </div>
    </nav>

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER CTA -->
    <section class="footer-cta">
        <div class="footer-overlay">
            <div class="container text-center text-white">
                <h4>Siap bikin rumahmu lebih nyaman?</h4>
                <p>Temukan produk pilihan untuk keluarga muda sekarang juga</p>
                <a href="#" class="btn-footer">Lihat Produk</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">
                        <a class="navbar-brand fw-bold" href="/">
                            <span class="brand-main">Huniopia</span>Goods
                        </a>
                    </h5>
                    <p>Menyediakan produk furnitur dan perlengkapan rumah berkualitas tinggi untuk hunian Anda.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-muted fs-4"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-muted fs-4"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-muted fs-4"><i class="bi bi-tiktok"></i></a>
                        <a href="#" class="text-muted fs-4"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <h6 class="fw-bold text-uppercase">Contact Us</h6>
                    <p> Bandung, Jawa Barat <br>
                    </p>
                    <p class="mb-1"><i class="bi bi-whatsapp"></i> | 0851-1997-1601</p>
                    <p class="mb-1"><i class="bi bi-envelope"></i> | salesgoods@huniopia.com</p>
                    <p><i class="bi bi-globe"></i> | https://goods.huniopia.com</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h6 class="fw-bold text-uppercase">Subscribe</h6>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="#" method="POST" class="mt-2">
                        @csrf
                        <div class="mb-3">
                            <label for="emailFooter" class="form-label">Enter your email address</label>
                            <input type="email" name="email" class="form-control rounded-3" id="emailFooter" placeholder="example: email@domain.com">
                        </div>
                        <button type="submit" class="btn btn-dark rounded-pill px-4">
                            Subscribe
                        </button>
                        @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </form>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="mb-0">&copy; 2025 HuniopiaGoods. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>