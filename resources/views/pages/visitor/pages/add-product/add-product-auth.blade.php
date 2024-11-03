@extends('layouts._master')
@section('title', 'Vos informations')
@section('content')
    <div class="add-product">

        <div class="container">
            <div class="progress-bar">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 done">
                        <div class="item" data-class="form1">
                            <span class="number">1</span>
                            <span class="text">Informations générales</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 done">
                        <div class="item" data-class="form2">
                            <span class="number">2</span>
                            <span class="text">Détail du bien</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 done">
                        <div class="item" data-class="form3">
                            <span class="number">3</span>
                            <span class="text">Décrivez votre bien</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 done">
                        <div class="item" data-class="form4">
                            <span class="number">4</span>
                            <span class="text">Photos</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 active">
                        <div class="item" data-class="form5">
                            <span class="number">5</span>
                            <span class="text">Vos informations</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div class="form5">
                    <form action="{{ route('add-product-status') }}" method="POST">
                        @csrf
                        <input type="text" name="id" value="{{ $product_id }}" hidden>
                        <div class="form-body">
                            <h3>Vos informations</h3>
                            <div class="add-product-register">

                                <div class="connection-with">
                                    <div class="facebook"><a href="{{ url('auth/facebook') }}"><i class="fa-brands fa-facebook"></i>Connecter avec Facebook</a></div>
                                    <div class="google"><a href="{{ url('auth/google') }}"><i class="fa-brands fa-google"></i> Connecter ave Google</a></div>
                                </div>
                                <div class="dvider">OU</div>
                                <p class="require-field">
                                    <span><i class="fas fa-info"></i></span> les champs avec (<span>*</span>) sont
                                    obligatoires
                                </p>
                                <div class="register-form">
                                    <div class="row">
                                        <label class="required type-label" for="type">Vous étes</label>
                                        <div class="br"></div>
                                        <div class="col-sm-7">
                                            <div class="type">
                                                <div class="option">
                                                    <input type="radio" name="type" checked>
                                                    <label for="type">Particulier</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" name="type">
                                                    <label for="type">Professionnel</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <label class="required" for="name">Nome</label>
                                            <div class="input">
                                                <div class="prifix"><i class="fa-solid fa-user"></i></div>
                                                <input type="tetx" name="name" placeholder="Votre nom"
                                                    class="@error('name') is-invalid @enderror" required>
                                            </div>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-7">
                                            <label class="required" for="email">Email</label>
                                            <div class="input">
                                                <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                                                <input type="tetx" name="email" placeholder="nom@example.com"
                                                    class="@error('email') is-invalid @enderror" required>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-7">
                                            <label class="required" for="password">Mote de passe</label>
                                            <div class="input">
                                                <div class="prifix"><i class="fa-solid fa-lock"></i></div>

                                                <div class="suffex hide-password" data-class="hide-password">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                                <div class="suffex show-password" data-class="show-password">
                                                    <i class="fa-solid fa-eye"></i>
                                                </div>
                                                <input type="password" name="password" placeholder="mot de passe"
                                                    autocomplete=false class="@error('password') is-invalid @enderror"
                                                    required>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-7">
                                            <label class="required" for="phone">Téléphone</label>
                                            <div class="input">
                                                <div class="prifix"><i class="fa-solid fa-mobile"></i></div>
                                                <input type="tetx" name="phone" placeholder="06XXXXXXXX"
                                                    class="@error('phone') is-invalid @enderror" required>
                                            </div>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="switch-wrapper">
                                                <p class="explanation">Masquer le numéro dans l'annonce</p>
                                                    <label class="switch">
                                                        <input type="checkbox" name="display_phone_status">
                                                        <span class="slider round"></span>
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>En cliquant sur "<strong>VALIDER</strong>", vous acceptez les <a href="#">termes et
                                        conditions
                                    </a>du
                                    <strong>admar.ma</strong>
                                </p>
                            </div>
                        </div>

                        <div class="boost">
                            <h2>ATTIREZ PLUS ET VENDEZ PLUS VITE</h2>
                            <P>Choisir un pack de crédit et lq durée ci-dessous,<br>
                                Chaque pack PRO vient avec des crédits additionels et un nombre important de crédits
                                d'annonces
                            </P>
                            <div class="boost-wrapper">
                                <div class="icon"><i class="fa-solid fa-chart-column"></i></div>
                                <div class="content">
                                    <h3 class="title">Booster l'annonce</h3>
                                    <p class="description col-md-8">Obtenez jusqu'à 10 Vues supplémentaires sur vos
                                        annonces avec plus
                                        d'options de mise en évidence</p>
                                </div>
                                <div class="boost-submit">
                                    <a href="#">BOOST</a>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <button id="back-btn" class="previeus"><i class="fa-solid fa-angle-left"></i>
                                RETOUR</button>

                            <button type="submit" class="suivant">VALIDER <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (isset($next))
        @if ($next == true)
            <div class="modal-backdrop fade show"></div>
        @endif
        <!-- the last add product form Modal -->
        <div class="modal fade @if ($next == true) show d-block @endif" id="validate-modal" tabindex="-1"
            role="dialog" aria-labelledby="validate-modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content product-modal">
                    <div class="close" type="button" data-dismiss="modal"><a href="{{ route('close-modal') }}">X</a>
                    </div>
                    <div class="modal-carte-content last-add-product-model">
                        <form action="{{ route('add-product-done') }}">
                            @csrf
                            <input type="text" name="id" value="{{ $product_id }}" hidden>
                            <input type="text" name="from_auth" value="true" hidden>

                            <div class="radio"><input type="radio" name="status" value="now" ><span>Publier tout
                                    de suite</span></div>
                            <div class="radio"><input type="radio" name="status"  value="draft"><span>Enregistrer</span></div>
                            <div class="radio"><input type="radio" name="status"  value="programmed"><span>Programmer</span></div>
                            <div class="date">
                                <input type="date" name="starts_at_date">
                                <input type="time" name="starts_at_time">
                            </div>
                            <div class="validate">
                                <button type="submit" class="suivant">VALIDER <i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
