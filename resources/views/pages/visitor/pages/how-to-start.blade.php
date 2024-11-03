@extends('layouts._master')
@section('title', 'admar | comment ça marche')
@section('content')
    <div class="how-to-start">

        <div class="how-hero">
            <div class="hero-container">
                <img src="{{ asset('assets/images/Banner comment ca marche.jpg') }}" alt="">
                <div class="hero-right">
                    <div class="hero-right-container">
                        <h3>Acheter et vendez <br> <span>facilement et rapidement
                            sur</span> <b>admar !</b>
                        </h3>

                        <div class="icons">
                            <i class="icon fas fa-car  text-primary "></i>
                            <i class="icon fas fa-mobile-screen  text-danger "></i>
                            <i class="icon fas fa-home text-warning "></i>
                            <i class="icon fas fa-toolbox text-success "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="yotube-playlist">
                <iframe src="https://www.youtube.com/embed/videoseries?list=PLV8vIYTIdSnbh5dOzzOGYABSZLdguEbUG"
                    allowfullscreen></iframe>
            </div>
        </div>


        <div class="how-body">
            <div class="container">
                <div class="section">
                    <h2 class="title"> <b>Ventez rapidement</b> et gagnez de l'argent</h2>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="how-post">
                                <div class="img">
                                    <img class="img-holder mb-2" src="{{ asset('assets/images/article1.png') }}" />
                                </div>
                                <p>Prenez de belles photos
                                    du <b>bien</b> clairement</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ">
                            <div class="how-post">
                                <div class="img">
                                    <img class="img-holder mb-2" src="{{ asset('assets/images/article2.png') }}" />
                                </div>
                                <p>Déposer votre annonce
                                    gratuitement sans frais
                                    sur <b>admar</b> </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="how-post">
                                <div class="img">
                                    <img class="img-holder mb-2" src="{{ asset('assets/images/article3.png') }}" />
                                </div>
                                <p> <b>Vendez rapidement</b> et
                                    comptez votre argent</p>
                            </div>
                        </div>

                    </div>

                    <div class="text-center">
                        <a class="nav-link start-ads" type="button" data-toggle="modal"
                            data-target="#add-product-modal-1" data-keyboard='false'>
                            <i class="fas fa-plus"></i><span>Déposer une annonce</span>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="section">
                    <h2 class="title"> <b>Achetez facilement</b> ce que vous voulez de plus beau</h2>

                    <div class="row  justify-content-center text-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="how-post">
                                <div class="img">
                                    <img class="img-holder mb-2" src="{{ asset('assets/images/article4.png') }}" />
                                </div>
                                <p>Trouvez le produit dont <b>vous avez besoin</b>
                                    sans
                                    sortir de chez vous</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="how-post">
                                <div class="img">
                                    <img class="img-holder mb-2" src="{{ asset('assets/images/article5.png') }}" />
                                </div>
                                <p>Parlez immédiatement au
                                    vendeur par <b>téléphone</b>
                                    ou par <b>chat</b> sur admar</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="how-post">
                                <div class="img">
                                    <img class="img-holder mb-2" src="{{ asset('assets/images/article6.png') }}" />
                                </div>
                                <p> <b>Inspectez</b> l'article puis
                                    payez l'argent...
                                    Félicitations pour votre achat</p>
                            </div>
                        </div>

                    </div>


                    <div class="text-center">
                        <a class="search-btn" type="button">
                            <i class="fas fa-search"></i><span>Rechercher</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
