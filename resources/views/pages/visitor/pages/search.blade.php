@extends('layouts._master')
@section('title', 'Search')
@section('content')
    <div class="search">
        @include('layouts._brand-ads')
        <div class="container">
            <div class="breadcrumbs">
                <div class="breadcrumbs">
                    <span><a href="">Accueil</a></span>
                    <span><a href="">Téléphone</a></span>
                    <span>Android</span>
                </div>
            </div>
        </div>
        @include('pages.visitor.sections._search-form')
        @include('pages.visitor.sections._top-premuim')
        <div class="display-bar">
            <div class="container">
                <div class="wrapper">
                    <div class="chooses">
                        <span class="icon">Vue: </span>
                        <span class="icon row justify-content-center active" data-class="display-list"><i
                                class="fas fa-list col-12"></i><span class="col-12 text-center">LISTE</span></span>
                        <span class="icon row justify-content-center" data-class="display-cartes"><i
                                class="fa-solid fa-table-cells-large col-12"></i><span
                                class="col-12 text-center">CARTES</span></span>
                    </div>
                    <div class="items-number">
                        (247 060 annonces)
                    </div>
                </div>
            </div>
        </div>


        {{-- search body --}}
        <div class="search-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="menu">
                            <div class="box">
                                <div class="title">Rayon</div>
                                <form action="">
                                    <div class="input distance-input">
                                        <div class="suffex">km</div>
                                        <input class="distance distance-progress" type="text" value="100" name="distance">
                                    </div>
                                    <input type="range" class="range" max="1000000" min="10" name="distance-progress" data-class="distance-progress">

                                    <div class="actions">
                                        <input class="clear" type="reset" value="EFFACER">
                                        <input class="submit" type="submit" value="VALIDER">
                                    </div>
                                </form>
                            </div>

                            <div class="box">
                                <div class="title">Prix</div>
                                <form action="" class="multi-range-form">
                                    <div class="input">
                                        <label for="">Dhs</label>
                                        <input type="text" placeholder="Prix Min" name="prix-min" class="min-progress">

                                    </div>
                                    <div class="input">
                                        <label for="">Dhs</label>
                                        <input type="text" placeholder="Prix Max" name="prix-max" class="max-progress">
                                    </div>

                                    <div class="multi-range">
                                        <input type="range" class="range" min="100" max="1000000" value="500000" id="min"
                                            data-class="min-progress">
                                        <input type="range" class="range" min="100" max="1000000" value="500000" id="max"
                                            data-class="max-progress">
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="actions">
                                        <input class="clear" type="reset" value="EFFACER">
                                        <input class="submit" type="submit" value="VALIDER">
                                    </div>
                                </form>
                            </div>

                            {{-- the particuler menu serach section --}}
                            
                            @include('layouts.menu-search-forms._offers')

                            <div class="box">
                                <div class="title">État</div>
                                <form action="">
                                    <div class="radio"><input type="radio" name="status" checked><span> Tout</span>
                                    </div>
                                    <div class="radio"><input type="radio" name="status"><span> État moyen</span></div>

                                    <div class="radio"><input type="radio" name="status"><span> Bon état</span></div>
                                    <div class="radio"><input type="radio" name="status"><span> Trés bon état</span>
                                    </div>
                                    <div class="radio"><input type="radio" name="status"><span> État neuf</span></div>
                                    <div class="radio"><input type="radio" name="status"><span> Neuf jamais
                                            utilisé</span></div>
                                    <br>
                                </form>
                            </div>

                            <div class="box">
                                <div class="option">
                                    <span>Prix mentionné</span>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="box">
                                <div class="option">
                                    <span>Avec photos</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="box">
                                <div class="option">
                                    <span>Échange</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="box">
                                <div class="title">Vendeurs</div>
                                <form action="">
                                    <div class="radio"><input type="radio" name="status" checked><span> Touts</span>
                                    </div>
                                    <div class="radio"><input type="radio" name="status"><span> Particulier</span>
                                    </div>
                                    <div class="radio"><input type="radio" name="status"><span> Boutiques</span>
                                    </div>
                                    <br>
                                </form>
                            </div>

                            <div class="reset-filters">
                                EFFACER FILTRES
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="filters">
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

                                <div class="input">
                                    <div class="title"><i class="fa-solid fa-truck"></i> Livraison</div>
                                    <select name="delevry-type" id="delevry-type">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Livraison à domicile</option>
                                        <option value="2">Livraison en point relais</option>
                                        <option value="3">Le retrait en magasin</option>
                                        <option value="4">livraison standard</option>
                                        <option value="5">Livraison express</option>
                                        <option value="6">Livraison sur rendez-vous</option>
                                    </select>
                                </div>

                            </form>
                        </div>

                        <div class="products display-list">
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
                        <div class="products display-cartes">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures</div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures</div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/6.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures</div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/13.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/8.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/11.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/12.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/product4.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> </div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/6.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> </div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/13.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>
                                                <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison
                                                    Gratuite</div>
                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> </div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/8.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>

                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> </div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/11.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>

                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> </div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/12.jpg') }}" alt="">
                                                </div>
                                                <div class="imgs-number">
                                                    <i class="fas fa-image"></i> 5
                                                </div>

                                                <div class="like">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="title">Puegot 308</div>
                                                <div class="price">100 000 <span>DH</span> </div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures
                                                </div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @include('pages.visitor.sections._pagination')
                    </div>
                </div>
                @include('pages.visitor.sections._banner')


                <div class="most-researches">
                    <div class="title">Recherches Populaires</div>

                    <ul class="content">
                        <li class="item">Peugot 308</li>
                        <li class="item">Infinix note</li>
                        <li class="item">Iphone maroc</li>
                        <li class="item">Xiaomi M10</li>
                        <li class="item">Appartement Neuf</li>
                        <li class="item">Samsung A30s</li>
                        <li class="item">Lenovo ThinkPad w541</li>

                        <li class="item">Peugot 308</li>
                        <li class="item">Infinix note</li>
                        <li class="item">Iphone maroc</li>
                        <li class="item">Xiaomi M10</li>
                        <li class="item">Appartement Neuf</li>
                        <li class="item">Samsung A30s</li>
                        <li class="item">Lenovo ThinkPad w541</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
