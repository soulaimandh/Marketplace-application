@include('layouts._connection-modals')
@include('layouts._add-products-modals')
@include('layouts._make-order-modal')


<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            admar<span>MAROC</span>
        </a>

        <ul class="nav-top-items">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{route("wishlist")}}">
                        <span class="item-nav"><i class="far fa-heart"></i><span>FAVORIS <span
                                    class="number">1</span></span></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal">
                        <span class="item-nav"><i class="fa-solid fa-comment-dots"></i><span>MESSAGES</span></span>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="logo">
                            @if(Auth::user()->avatar=="")
                            <img  src="{{asset('assets/images/client/avatar.png')}}">
                            @else
                            <img  src="{{Auth::user()->avatar()}}">
                            @endif
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-shop"></i> Mon Magasan</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i> Mon
                                Profil</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit"><i
                                        class="fa-solid fa-right-from-bracket"></i>
                                    Déconnexion</button>
                            </form>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-headset"></i>
                                Support</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{ route('contact') }}">Aide admar</a></li>
                        <li><a class="dropdown-item" href="#">FAQ admar</a></li>
                        <li><a class="dropdown-item" href="{{ route('forum') }}">Forum admar</a></li>
                        <li><a class="dropdown-item" href="{{ route('blog') }}">Blog admar</a></li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <button type="button" class="nav-link" data-toggle="modal" data-target="#connection-modal"
                        data-keyboard='false'>
                        <div class="avatar">
                            <i class="fas fa-user"></i> SE CONNECTER
                        </div>
                    </button>
                </li>
            @endif
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item hot-pro">
                        <a class="nav-link hmizat" href="{{ route('hmizat-admar') }}">Hmizate admar<span><i
                                    class="fas fa-fire"></i>hot</span></a>
                    </li>
                    <li class="nav-item hot-pro">
                        <a class="nav-link shop" href="{{ route('shops') }}">Boutique<span>pro</span></a>
                    </li>

                    <div class="upper-links">
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span>admar Business</span></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="{{ route('premuim-products') }}">Annonces Premuim</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('show-shops') }}">Boutiques</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('forum') }}"><span>Forum</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}"><span>Blog</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('how-to-start') }}"><span>Comment ça
                                    marche</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span>Notre App</span></a></li>
                    </div>


                    <div class="right-items d-flex justify-content-end">
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("wishlist")}}">
                                    <span class="item-nav"><i class="far fa-heart"></i><span>FAVORIS <span
                                                class="number">1</span></span></span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal">
                                    <span class="item-nav"><i
                                            class="fa-solid fa-comment-dots"></i><span>MESSAGES</span></span>
                                </a>
                            </li>


                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="logo">
                                        @if(Auth::user()->avatar=="")
                                        <img  src="{{asset('assets/images/client/avatar.png')}}">
                                        @else
                                        <img  src="{{Auth::user()->avatar()}}">
                                        @endif
                                    </div>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-shop"></i> Mon
                                            Magasan</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('profile')}}"><i class="fas fa-user-edit"></i> Mon
                                            Profil</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit"><i
                                                    class="fa-solid fa-right-from-bracket"></i>
                                                Déconnexion</button>
                                        </form>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-headset"></i>
                                            Support</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="{{ route('contact') }}">Aide admar</a></li>
                                    <li><a class="dropdown-item" href="#">FAQ admar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('forum') }}">Forum admar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('blog') }}">Blog admar</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <button type="button" class="nav-link" data-toggle="modal"
                                    data-target="#connection-modal" data-keyboard='false'>
                                    <div class="avatar">
                                        <i class="fas fa-user"></i> SE CONNECTER
                                    </div>
                                </button>

                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link start-ads" type="button" data-toggle="modal"
                                data-target="#add-product-modal-1" data-keyboard='false'>
                                <i class="fas fa-plus"></i><span>Déposer une annonce</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
