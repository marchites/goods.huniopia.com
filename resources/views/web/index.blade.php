@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row g-3">

        <!-- LEFT (BESAR) -->
        <div class="col-md-6">
            <div class="hero-modern hero-left d-flex align-items-center">

                <div class="hero-overlay"></div>

                <div class="hero-content text-white">
                    <h1 class="hero-title">
                        Rumah Nyaman Nggak Harus Mahal
                    </h1>

                    <p class="hero-subtitle">
                        Bikin rumah pertama kamu terasa hangat & estetik tanpa ribet
                    </p>

                    <a href="#inspirasi" class="btn-hero mt-3">
                        Lihat Inspirasi
                    </a>
                </div>

            </div>
        </div>

        <!-- RIGHT -->
        <div class="col-md-6 d-flex flex-column gap-3">

            <!-- TOP -->
            <div class="hero-modern hero-right-top d-flex align-items-center">

                <div class="hero-overlay"></div>

                <div class="hero-content text-white">
                    <h5 class="hero-small-title">Lampu Cozy</h5>
                    <a href="#" class="btn-hero-sm mt-2">Lihat</a>
                </div>

            </div>

            <!-- BOTTOM -->
            <div class="hero-modern hero-right-bottom d-flex align-items-center">

                <div class="hero-overlay"></div>

                <div class="hero-content text-white">
                    <h5 class="hero-small-title">Furnitur Minimalis</h5>
                    <a href="#" class="btn-hero-sm mt-2">Lihat</a>
                </div>

            </div>

        </div>

    </div>
</div>

<!-- PROBLEM -->
<section class="section bg-white text-center">
    <div class="container">
        <h2 class="mb-4">Pernah ngerasa gini?</h2>

        <div class="row">
            <div class="col-md-4 mb-3">
                <p>Rumah masih kosong & terasa dingin</p>
            </div>
            <div class="col-md-4 mb-3">
                <p>Bingung mulai dari mana</p>
            </div>
            <div class="col-md-4 mb-3">
                <p>Takut salah beli furnitur</p>
            </div>
        </div>
    </div>
</section>

<!-- SOLUTION -->
<section class="section text-center">
    <div class="container">
        <h2 class="mb-3">Tenang, kami bantu kamu</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Semua produk sudah kami pilih supaya cocok untuk keluarga muda yang ingin rumahnya nyaman dan estetik tanpa ribet.
        </p>
    </div>
</section>

<!-- KATEGORI -->
<section id="kategori" class="section bg-white">
    <div class="container">
        <h2 class="text-center mb-5">Kategori Pilihan</h2>

        <div class="row">
            @forelse ($categories as $category)
            <div class="col-md-3 mb-4">
                <a href="{{ url('/kategori/' . $category->slug) }}" class="text-decoration-none text-dark">
                    <div class="category-card">
                        <h5>{{ $category->name }}</h5>
                    </div>
                </a>
            </div>
            @empty
            <p class="text-center text-muted">Belum ada kategori</p>
            @endforelse
        </div>
    </div>
</section>

<!-- PRODUK -->
<section class="section">
    <div class="container">
        <h2 class="text-center mb-5">Produk Pilihan untuk Rumahmu</h2>

        <div class="row">
            @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="product-card position-relative">

                    <!-- BADGE ID -->
                    <span class="product-badge">
                        #{{ $product->id }}
                    </span>

                    <img src="{{ $product->image ?? 'https://via.placeholder.com/400x300' }}" class="w-100 mb-3">

                    <h5>{{ $product->name }}</h5>

                    <p class="text-muted">
                        {{ \Illuminate\Support\Str::limit($product->description, 70) }}
                    </p>

                    <a href="{{ url('/produk/' . $product->slug) }}"
                        class="btn-primary-custom w-100 text-center d-block">
                        Lihat Detail
                    </a>

                </div>
            </div>
            @empty
            <p class="text-center text-muted">Belum ada produk</p>
            @endforelse
            <!-- PAGINATION -->
            <div class="mt-4 d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</section>

<!-- INSPIRASI -->
<section id="inspirasi" class="section bg-white">
    <div class="container">
        <h2 class="text-center mb-5">Inspirasi Rumah untuk Kamu</h2>

        <div class="row">

            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="inspiration-card">
                    <img src="https://images.unsplash.com/photo-1633505899118-4ca6bd143043?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 mb-3">
                    <h5>Ruang Tamu Minimalis</h5>
                    <a href="#" class="text-decoration-none" style="color:#8b7355;">
                        Lihat Setup →
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="inspiration-card">
                    <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 mb-3">
                    <h5>Kamar Cozy</h5>
                    <a href="#" class="text-decoration-none" style="color:#8b7355;">
                        Lihat Setup →
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="inspiration-card">
                    <img src="https://plus.unsplash.com/premium_photo-1680382578857-c331ead9ed51?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 mb-3">
                    <h5>Dapur Simpel</h5>
                    <a href="#" class="text-decoration-none" style="color:#8b7355;">
                        Lihat Setup →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection