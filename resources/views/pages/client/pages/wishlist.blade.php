@extends('layouts._master')
@section('title', __('Favoris'))
@section('content')
    <div class="wishlist">
        <div class="container">
            @include('layouts._brand-ads')
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="header">
                                <div class="img">
                                    <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                                </div>
                                <div class="imgs-number">
                                    <i class="fas fa-image"></i> 5
                                </div>
                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison Gratuite</div>
                                <div class="like">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="body">
                                <div class="title">Puegot 308</div>
                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4 heures
                                </div>
                                <div class="status">Remise à neuf</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop