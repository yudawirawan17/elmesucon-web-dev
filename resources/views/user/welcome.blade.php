@extends('user.app')
@section('content')


    <section class="store-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                            <li data-target="#storeCarousel" data-slide-to="1"></li>
                            <li data-target="#storeCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="banner/banner1.jpg" alt="banner" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="banner/banner2x.jpg" alt="banner" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="banner/banner3x.jpg" alt="banner" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="site-section block-3 site-blocks-2 bg-light"  data-aos="fade-up">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>New Product</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel" >
            @foreach($produks as $produk)
            <div class="item">
            <div class="block-4 text-center">
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                <figure class="block-4-image">
                <img src="{{ asset('storage/'.$produk->image) }}" alt="Image placeholder" class="img-fluid" width="100%" style="height:300px">
                <div class="block-4-text p-4">
                <h3><a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">{{ $produk->name }}</a></h3>
                <p class="mb-0">Rp. {{ number_format($produk->price) }}</p>
                </div>
                </figure>
                </a>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    </div>
</div>
    @endsection