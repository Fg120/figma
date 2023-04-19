@extends('layouts.app')

@section('title', 'View')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('storage/' . $products->photo) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <h1>{{ $products->name }}</h1>
                    <h2>Our Partner in 30+ cities ready to rent you adventure equipment need!</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Sewa Sekarang</a>
                        <a href="https://youtu.be/vky7F5OK5Zk" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>DESCRIPTION</h2>
                    <h3> {{ $products->name }} </h3>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%">
                            <p>{{ $products->desc }}</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box" style="width: 50%">
                            <span>
                                <h4>Harga</h4>
                                <h6>Rp.{{$products->price}}/Hari</h6>
                            </span>
                            <span>
                                <h4>Stock</h4>
                                <h6>{{$products->stock_available}} Pcs</h6>
                            </span>
                            <h5>Masukkan keranjang?</h5>
                            <a href="#" class="btn btn-primary">Tambahkan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
