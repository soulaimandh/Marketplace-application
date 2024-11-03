@extends('layouts._master')
@section('title', 'admar | shop')
@section('content')
    <div class="show-shops">
        <div class="container">
            @include('layouts._brand-ads')
        </div>
        @include('pages.visitor.sections._search-form')

        <div class="container">
            <h5 class="fw-bold sub-title">Nouvelle boutiques admar</h5>

            <div class="top-premuim-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-item">
                            <img class="screen" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-item">
                            <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                            <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-item">
                            <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-item">
                            <img class="screen" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-item">
                            <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                            <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-item">
                            <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <h5 class="fw-bold sub-title">Toutes les boutiques</h5>
            <div class="all-shops">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product3.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product2.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm6">
                        <div class="shops-item">
                            <div class="item-header">
                                <img class="screen" src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                <img class="logo" src="{{ asset('assets/images/product4.jpg') }}" alt="">
                            </div>
                            <div class="item-body">
                                <div class="title">HD-PROTECH</div>
                                <div class="category">Telephonique</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components._wait-loading')

        </div>

    </div>

@endsection
