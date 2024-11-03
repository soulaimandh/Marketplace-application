@extends('layouts._master')
@section('title', 'admar | contact')
@section('content')

    <div class="contact">
        <div class="container">
            <div class="contact-hero">
                <div class="row">
                    <div class="col-md-4">
                        <form action="" class="form">
                            <h4>Contactez-Nous</h4>
                            <input type="text" placeholder="Nom Complet" name="name"
                                class="@error('name') is-invalid @enderror" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="tetx" name="email" placeholder="Email"
                                class="@error('email') is-invalid @enderror" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="tetx" name="phone" placeholder="Téléphone"
                                class="@error('phone') is-invalid @enderror" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="tetx" name="subject" placeholder="Objet"
                                class="@error('subject') is-invalid @enderror" required>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <textarea name="message" class="@error('message') is-invalid @enderror" rows="8" placeholder="Votre Message" required></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input class="submit" type="sybmit" value="ENVOYER">
                        </form>
                    </div>
                    <div class="col-md-8">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6954981.701626024!2d-7.151688033521338!3d31.661571061324043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1658760400477!5m2!1sen!2sma"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact-links">
                <div class="row">
                    <div class="col-md-3 col-sm6">
                        <div class="item">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="title">Email</div>
                            <div class="content">support@admar.ma</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm6">
                        <div class="item">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="title">Téléphone</div>
                            <div class="content">(+212) 699 99 99 99</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm6">
                        <div class="item">
                            <div class="icon"><i class="fas fa-map"></i></div>
                            <div class="title">Adresse</div>
                            <div class="content">Gr AI ALIA 2 Sidi Moumen</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm6">
                        <div class="item">
                            <div class="icon"><i class="fa-brands fa-teamspeak"></i></div>
                            <div class="title">L'équipe sera disponible</div>
                            <div class="content">lundi au vendredi de 9h à 18h</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-footer">
                <div class="overlay"></div>
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="">
                <h4 class="fw-bold">Cratuit sur Google Play et App Store installez dés maintenant</h4>

                <div class="download-btns">
                    <button class="download" class="btn btn-outline-dark">
                        <i class="fa-brands fa-google-play"></i>
                        <span>Download on the</span>
                        <strong>Google Play</strong>
                    </button>
                    <button class="download" class="btn btn-outline-dark">
                        <i class="fa-brands fa-apple"></i>
                        <span>Download on the</span>
                        <strong>App Store</strong>
                    </button>
                </div>
            </div>
            <div class="start-btn text-center">
                <a class="start-ads" type="button" data-toggle="modal"
                    data-target="#add-product-modal-1" data-keyboard='false'>
                    <i class="fas fa-plus"></i><span>Déposer une annonce</span>
                </a>
            </div>
        </div>
    </div>
@endsection
