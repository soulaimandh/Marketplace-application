@extends('layouts._master')
@section('title', 'admar | shop')
@section('content')
    <div class="shop">
        <div class="container">
            <div class="shop-hero">
                <img class="cover" src="{{ asset('assets/images/cover.png') }}" alt="">
                <div class="social">
                    <a href="" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                    <a href="" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="stats">
                    <div class="stat">
                        <span>35</span>
                        <span>Aacticles</span>
                    </div>
                    <div class="stat">
                        <span>1863</span>
                        <span>Abonné</span>
                    </div>
                    <a class="subscribe" href="#">SABONNER</a>
                </div>

                <div class="infos">
                    <div class="logo">
                        <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h1 class="name">
                            ALLO GSM
                        </h1>
                        <strong class="description">Les meilleurs offers du marché</strong>
                        <div class="register-date">Member Depuis 2021</div>
                        <a class="phones" href="">Téléphones</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="choose-bar row">
                    <div class="col-md-6 chooses">
                        <span data-class="annonces" class="option selected">
                            Annonces
                        </span>
                        <span data-class="about" class="option">
                            A propos
                        </span>
                    </div>
                    <div class="col-md-6 contacts">
                        <a class="chat" href="#">
                            <i class="fas fa-message"></i> chat
                        </a>
                        <a class="phone" href="#">
                            <i class="fas fa-phone"></i> voir le numéro
                        </a>
                    </div>
                </div>
            </div>
            <div class="annonces">
                <div class="filters-container row">
                    <div class="col-md-6">
                        <div class="shop-name">Toutes les annonces de faouzi admar</div>
                    </div>
                    <div class="col-md-6">
                        <div class="filters">
                            <form action="" class="form">
                                <input class="reset" type="reset" value="Effacer Les Filtres">

                                <div class="input">
                                    <div class="title"><i class="fa-solid fa-arrow-down-wide-short"></i>
                                        Trier: <strong>Défaut</strong></div>
                                    <select name="sort" id="sort">
                                        <option value="" selected disabled>
                                            Choisisez votre ville
                                        </option>
                                        <option value="">A->Z</option>
                                        <option value="">Z->A</option>
                                    </select>
                                </div>

                                <div class="input">
                                    <div class="title"><i class="fa-solid fa-truck"></i> Livraison</div>
                                    <select name="delevry-type" id="delevry-type">
                                        <option value="" selected disabled>
                                            Choisisez votre ville
                                        </option>
                                        <option value="">City 1</option>
                                        <option value="">City 2</option>
                                        <option value="">Ciity 3</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="products">
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures</div>
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures</div>
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures</div>
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
                                    <div class="feature"><i class="fa-solid fa-motorcycle"></i> Livraison Gratuite</div>
                                    <div class="like">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="title">Puegot 308</div>
                                    <div class="price">100 000 <span>DH</span></div>
                                    <div class="category"><i class="fa-solid fa-shapes"></i> Voitures</div>
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures</div>
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures
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
                                    <div class="location"><i class="fa-solid fa-location-dot"></i> Casablanca, il y a 4
                                        heures
                                    </div>
                                    <div class="status">Remise à neuf</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('components._wait-loading')
                </div>
            </div>
            <div class="about">
                <h4>A propos du magasin</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta possimus recusandae pariatur aspernatur,
                    minus ratione quis voluptatibus eos non dolorem iste, dignissimos officiis, autem delectus voluptate
                    sapiente est magni. Dolore?</p>
                <h4>Avantages du magasin</h4>
                <ul>
                    <li>- Livraison à domicile</li>
                    <li>- Avec facturation</li>
                </ul>
                <div class="address">
                    <h4><i class="fa-solid fa-location-dot"></i> Adresse</h4>
                    <p>34 bis rue perrone belvédére casablanca, Maroc Casablanca <a class="link" href="">
                            Afficher sur la carte</a></p>

                </div>

                <div class="links">
                    <h4><i class="fa-solid fa-globe"></i> Liens</h4>
                    <li>htps://www.admar.ma/smartphone</li>
                    <li>htps://www.facebook.com/smartphone</li>
                    <li>htps://www.yoytube/smartphone</li>
                    <li>htps://www.twitter/smartphone</li>
                </div>

                <div class="categories">
                    <h4><i class="fa-solid fa-table-cells-large"></i> Catégories</h4>
                    <ul class="cats">
                        <li><a href="#">Phones</a></li>
                        <li><a href="#">Computers</a></li>
                        <li><a href="#">Tablets</a></li>
                    </ul>
                </div>

                <div class="working-dates">
                    <h4><i class="fa-solid fa-calendar-days"></i> Horaires de travail</h4>

                    <span>
                        Lundi à Vendredi           9h-00 - 12h00 et 13h30 - 18h00
                        <br>
                        Samedi                     9h-00 - 15h00
                    </span>
                </div>

                <div class="contacts">
                    <h4><i class="fa-solid fa-address-card"></i> Contact nous sur</h4>

                    <ul>
                        <li><a href=""><i class="fas fa-phone"></i>Téléphone</a></li>
                        <li><a href=""><i class="fab fa-whatsapp"></i>Whatsapp</a></li>
                        <li><a href=""><i class="fas fa-message"></i>Chat</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>Email</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
