<div class="mobile-botton-menu d-flex align-items-center justify-content-center d-md-none text-center">
    @if (Auth::check())
        <div class="stickymenu-item">
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
                            <button class="dropdown-item" type="submit"><i class="fa-solid fa-right-from-bracket"></i>
                                Déconnexion</button>
                        </form>
                    </li>
            </li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-headset"></i>
                    Support</a></li>
            <hr>
            <li><a class="dropdown-item" href="#">Aide admar</a></li>
            <li><a class="dropdown-item" href="#">FAQ admar</a></li>
            <li><a class="dropdown-item" href="{{ route('forum') }}">Forum admar</a></li>
            <li><a class="dropdown-item" href="{{ route('blog') }}">Blog admar</a></li>
            </ul>
            </li>
        </div>
        <div class="stickymenu-item">
            <a class="primary-link" href="#">
                <i class="fa-solid fa-comment-dots"></i><span>Messages</span></a>
        </div>
        <div class="stickymenu-item"><a href="{{route("wishlist")}}"><i class="far fa-heart"></i><span>Favoris <span
                        class="number">1</span></a></div>
    @else
        <div class="stickymenu-item">
            <a type="button" class="nav-divnk" data-toggle="modal" data-target="#connection-modal"
                data-keyboard='false'>
                    <i class="fas fa-user"></i><span>Se connecter</span>
            </a>

        </div>
    @endif
    <div class="stickymenu-item">
        <a type="button" data-toggle="modal" data-target="#add-product-modal-1" data-keyboard='false'>
            <i class="fa-solid fa-bullhorn"></i><span>Annonce</span></a>
    </div>
    {{-- <div class="stickymenu-item">
        <a class="primary-link" href="#">
            <i class="fas fa-tachometer-alt"></i><span>dashboard</span></a>
    </div>

    <div class="stickymenu-item">
        <a class="primary-link" href="#">
            <i class="fas fa-tachometer-alt"></i><span>dashboard</span></a>
    </div> --}}

</div>
</div>
