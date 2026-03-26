@extends('layouts.landing_page')

@section('content')
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
@endsection