@extends('layouts._master')
@section('title', 'admar | shop')
@section('content')
    <div class="shops">
        <div class="shops-hero">
            <div class="row">
                <div class="col-sm-6">
                    <div class="img">
                        <img src="{{ asset('assets/images/admar-shop.png') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <h1 class="title">admar Boutique</h1>
                        <p class="description">Booster la visibilité de votre business et bénéficiez d'un espace dédié sur
                            admar.ma
                            pour votre entreprise</p>

                        <a type="button" data-toggle="modal" data-target="#shop-connection-modal" data-keyboard='false'>Me connecter à
                            ma boutique</a>
                        <a href="{{ route('register') }}">Ouvrir une boutique</a>
                    </div>
                </div>
            </div>
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


