@extends('layouts._master')
@section('title', 'product detail')
@section('content')
    <div class="product-details">
        <div class="container">

            <div class="google-ads">
                <img src="{{ asset('assets/images/google-ads.png') }}" alt="">
            </div>

            <div class="breadcrumbs">
                <div class="breadcrumbs">
                    <span><a href="">Accueil</a></span>
                    <span><a href="">Multimedia</a></span>
                    <span><a href="">Téléphones</a></span>
                    <span>Android</span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="product-header">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="main-img-container">
                                    <div class="main-img">
                                        <a class="gallery-lightbox" href="{{ asset('assets/images/product2.jpg') }}"><img src="{{ asset('assets/images/product2.jpg') }}"
                                            alt=""></a>
                                        <div class="show-more"><a class="gallery-lightbox" href="{{ asset('assets/images/product2.jpg') }}">Voir les 10 photos</a>
                                        </div>
                                    </div>
                                    <div class="d-none">
                                    <div class="img"> <a class="gallery-lightbox" href="{{ asset('assets/images/product4.jpg') }}"><img src="{{ asset('assets/images/product4.jpg') }}" alt=""></a></div>
                                    <div class="img"> <a class="gallery-lightbox" href="{{ asset('assets/images/product4.jpg') }}"><img src="{{ asset('assets/images/product4.jpg') }}" alt=""></a></div>
                                    <div class="img"> <a class="gallery-lightbox" href="{{ asset('assets/images/product4.jpg') }}"><img src="{{ asset('assets/images/product4.jpg') }}" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="images">
                                    <div class="img"> <a class="gallery-lightbox" href="{{ asset('assets/images/product2.jpg') }}"><img src="{{ asset('assets/images/product2.jpg') }}" alt=""></a></div>
                                    <div class="img"> <a class="gallery-lightbox" href="{{ asset('assets/images/product2.jpg') }}"><img src="{{ asset('assets/images/product2.jpg') }}" alt=""></a></div>
                                    <div class="img"> <a class="gallery-lightbox" href="{{ asset('assets/images/product2.jpg') }}"><img src="{{ asset('assets/images/product2.jpg') }}" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="prduct-content">
                            <button type="button" class="make-order-btn" data-toggle="modal" data-target="#make-order"
                                data-keyboard='false'>
                                <div class="make-order-wrapper">
                                    <div class="icon"><i class="fa-solid fa-truck"></i></div>
                                    <div class="content">
                                        <h2>Commander mantenant</h2>
                                        <p>Commander et recevez votre article sans bouger de chez vous !</p>
                                    </div>
                                    <div class="icon"><i class="fa-solid fa-box"></i></div>
                                </div>
                            </button>
                            <div class="header-content">
                                <h1 class="title">
                                    iPhone 12 Pro Max 128 GB
                                </h1>
                                <div class="price"><span>3 500</span> DH</div>
                                <div class="delivery"><i class="fas fa-motorcycle"></i>Livraison gratuit</div>
                                <div class="share">
                                    <div class="icon"><i class="fas fa-share"></i></div>
                                    <div class="span">Partager</div>
                                </div>
                                <div class="info">
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, sidi othman
                                    </div>
                                    <div class="regestred-date"><i class="fa-solid fa-clock"></i>il y a 4 heures</div>
                                </div>
                            </div>
                            <hr>
                            <div class="description">
                                <h2 class="title">Description</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium et enim optio
                                    deleniti, laudantium incidunt, culpa similique deserunt alias cupiditate modi! Natus, ex
                                    velit aliquid cumque quia amet quod ea!</p>
                            </div>
                            <hr>
                            <div class="features">
                                <h2 class="title">
                                    Critéres
                                </h2>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                                <div class="feature">
                                    <span class="icon"><i class="fas fa-clipboard"></i></span>
                                    <span class="info">
                                        <div class="name">Marque</div>
                                        <div class="value">iPhone</div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="menu">
                                    <div class="box">
                                        <div class="logo"><img src="{{ asset('assets/images/product.jpg') }}"
                                                alt=""></div>
                                        <div class="shop"><i class="fas fa-shop"></i>Boutique</div>
                                        <div class="name">
                                            <a href="#">Smart Telephony</a>
                                        </div>
                                        <div class="show-products">
                                            <a href="">Voir toutes les annonces</a>
                                        </div>
                                        <div class="show-number"><a href=""><i class="fas fa-phone"></i>Afficher
                                                le numéro</a>
                                        </div>
                                        <div class="contact-vendor"><a href=""><i class="fas fa-message"></i>Chat
                                                avec le
                                                vendeur</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="location-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6954981.701626024!2d-7.151688033521338!3d31.661571061324043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1658760400477!5m2!1sen!2sma"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-ads">
                        <h2 class="title">Annonces de cet boutique</h2>
                        <div class="latest-shop-ads">
                            <div class="latest-shop-ads-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
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
                                    <div class="swiper-slide">
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
                                    <div class="swiper-slide">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/product1.jpg') }}" alt="">
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
                                    <div class="swiper-slide">
                                        <div class="product">
                                            <div class="header">
                                                <div class="img">
                                                    <img src="{{ asset('assets/images/product.jpg') }}" alt="">
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
                                    <div class="swiper-slide">
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
                                                <div class="price">100 000 <span>DH</span> <span class="shop"><i
                                                            class="fa-solid fa-store"></i> BOUTIQUE</span></div>
                                                <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                                <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca,
                                                    il y a 4 heures</div>
                                                <div class="status">Remise à neuf</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- navigation buttons -->
                                <div class="swiper-btn swiper-button-prev"></div>
                                <div class="swiper-btn swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="related-products">
                        <h2 class="title">
                            Annonces similaires
                        </h2>
                        <div class="products">
                            <div class="row">

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
                                                il
                                                y a 4 heures
                                            </div>
                                            <div class="status">Remise à neuf</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
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
                        <div class="box">
                            <div class="advices">
                                <div class="title">
                                    Conseils de sécurité
                                </div>
                                <div>1 - Ne pas envoyer de paiements sans avoir et vérifié le produit.
                                </div><br>
                                <div>2 - Nepas envoyer d'argent par des moyens de transfert d'argent, par
                                    virement
                                    bancaire
                                    ou par n'importe quels autre moyens.</div><br>
                                <div>3 - Donner rdv au vendeur dans un lieu public a une heure</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
