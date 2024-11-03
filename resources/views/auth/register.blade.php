@extends('layouts._master')
@section('title', 'Register')
@section('content')
    <div class="register">
        <div class="container">
            <div class="header">
                <h1>Créer un compte su admar.ma gratuitement</h1>
                <div class="connection-with">
                    <div class="facebook"><a href="{{ url('auth/facebook') }}"><i class="fa-brands fa-facebook"></i>Connecter avec Facebook</a></div>
                    <div class="google"><a href="{{ url('auth/google') }}"><i class="fa-brands fa-google"></i> Connecter ave Google</a></div>
                </div>
            </div>
            <div class="dvider">OU</div>

            <form action="{{route('register')}}" method="POST" class="register-form">
                @csrf
                <h5 class="text-left"><strong>Vous étes</strong></h3>
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
                    <label for="name">Nome (Obligatoire)</label>
                    <div class="input">
                        <div class="prifix"><i class="fa-solid fa-user"></i></div>
                        <input type="tetx" name="name" placeholder="votre Nom"
                            class="@error('name') is-invalid @enderror" required>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="phone">Téléphone (Obligatoire)</label>
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
                    <label for="city">Ville (Obligatoire)</label>
                    <div class="input">
                        <select name="city">
                            <option selected disabled>Choisissez</option>
                        @include('components._cities')
                    </select>
                    </div>
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="email">Email (Obligatoire)</label>
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
                    <label for="email-confirmation">Vérifiez email (Obligatoire)</label>
                    <div class="input">
                        <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                        <input type="tetx" name="email-confirmation"
                            placeholder="Vérifiez votre adresse email"
                            class="@error('email-confirmation') is-invalid @enderror" required>
                    </div>
                    <label for="password">Mote de passe (Obligatoire)</label>
                    <div class="input">
                        <div class="prifix"><i class="fa-solid fa-lock"></i></div>
                        <input type="password" name="password" placeholder="Votre mote de passe"
                            class="@error('password') is-invalid @enderror" required>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="name">Confirmer le mote de passe (Obligatoire)</label>
                    <div class="input">
                        <div class="prifix"><i class="fa-solid fa-lock"></i></div>
                        <input type="password" placeholder="Vérifiez votre mote de passe" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                    <p>En cliquant sur "Crée mon compte" j'accepte la <a href="#">Politique de confidetialite </a>de
                        <strong>admar.ma</strong>
                    </p>

                    <button type="submit" class="btn btn-primary d-block w-100 submit">
                        Crée mon compte
                    </button>


                    <h6>Accédez à vos recherches et à vos annonce favoris depuis n'importe quel ordinateur</h6>

                    <p class="footer-p">Connecter-vous à votre compte depuis n'importe quel ordinateur et accédez à vos
                        recherches et à vos
                        annonce favoris</p>
            </form>
        </div>
    </div>
@stop
