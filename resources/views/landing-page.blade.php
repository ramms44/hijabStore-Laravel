<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                    <div class="logo"><img  width="40%" height="40%" src="img/logo yoorchic.png"></div>
                    @include('partials.menus.main-right')
                    </div>
         
                    
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                     
                        <p>
Termasuk beberapa produk, kategori, keranjang belanja dan sistem checkout dengan integrasi Stripe, dan rajaongkir</p>
                       
<div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">Belanja Sekarang</a>
                    </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image">
                        <img src="img/hijablogo.png" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">Vanilla Hjab</h1>

                    <p class="section-description">Baca lebih lanjut, kemudian klik untuk melihat lebih banyak tentang penyedia layanan atau perangkat lunak atau perangkat lunak tertentu atau perangkat lain untuk digunakan untuk mendapatkan lebih baik.</p>

                    <div class="text-center button-container">
                        <a href="#" class="button">Terbaru</a>
                        <a href="#" class="button">Yang Dijual</a>
                    </div>

                    {{-- <div class="tabs">
                        <div class="tab">
                            Terbaru
                        </div>
                        <div class="tab">
                            Yang Dijual
                        </div>
                    </div> --}}

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">Lihat Lebih Banyak</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <blog-posts></blog-posts>

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
