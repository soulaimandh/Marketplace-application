@extends('layouts._master')
@section('title', 'admar | contact')
@section('content')
    <div class="all-products">
        <div class="container">
            <div class="google-ads">
                <img src="{{ asset('assets/images/google-ads.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="menu">
                        <div class="box">
                            <div class="logo"><img src="{{ asset('assets/images/product.jpg') }}" alt="">
                            </div>
                            <div class="shop"><i class="fas fa-shop"></i>Boutique</div>
                            <div class="name">
                                <a href="#">Smart Telephony</a>
                            </div>
                            <div class="show-products">
                                <a href="">Voir toutes les annonces</a>
                            </div>
                            <div class="show-number"><a href=""><i class="fas fa-phone"></i>Afficher
                                    le
                                    numéro</a>
                            </div>
                            <div class="contact-vendor"><a href=""><i class="fas fa-message"></i>Chat
                                    avec le
                                    vendeur</a>
                            </div>
                            <div class="actions">
                                <a href=""><i class="fas fa-heart"></i></a>
                                <a href=""><i class="fas fa-share-alt"></i></a>
                                <a class="report" href=""><i class="fas fa-exclamation-triangle"></i></a>
                                <a class="about" href=""><i class="fas fa-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="products-wrapper">
                        <div class="filters">
                            <h1>Tout les annonce de faouzi admar</h1>
                            <form action="" class="form">
                                <input class="reset" type="reset" value="Effacer Les Filtres">

                                <div class="input">
                                    <div class="title"><i class="fa-solid fa-arrow-down-wide-short"></i>
                                        Trier: <strong>Défaut</strong></div>
                                    <select name="sort" id="sort">
                                        <option selected disabled>
                                            Choisisez
                                        </option>
                                        <option value="">A->Z</option>
                                        <option value="">Z->A</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="products">
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/11.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ÉTAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/6.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="google-ads">
                                <img src="{{ asset('assets/images/google-ads.png') }}" alt="">
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/product6.png') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/6.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="google-ads">
                                <img src="{{ asset('assets/images/google-ads.png') }}" alt="">
                            </div>

                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/product6.png') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <div class="feature">5X VIP TOP</div>

                                            <div class="imgs-number">
                                                <i class="fas fa-image"></i> 5
                                            </div>
                                            <img src="{{ asset('assets/images/6.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="product-body">
                                            <div class="like">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="title">Samsung Note 9</div>
                                            <div class="price"><strong>3 000</strong> DH</div>

                                            <div class="features">
                                                <div class="feature">
                                                    <div class="name">
                                                        ETAT
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>

                                                <div class="feature">
                                                    <div class="name">
                                                        RAM
                                                    </div>
                                                    <div class="content">
                                                        6 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        STOCKAGE
                                                    </div>
                                                    <div class="content">
                                                        512 GB
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="name">
                                                        16 Pouces
                                                    </div>
                                                    <div class="content">
                                                        Neuf
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                            <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                il y a 4 heures
                                            </div>
                                            <div class="shop"><i class="fa-solid fa-store"></i> BOUTIQUE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
