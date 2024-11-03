<main id="app">
    <div id="upper" class="header-upper d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 d-flex justify-content-start">
                    <ul>
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
                        <li><a href="{{ route('forum') }}"><span>Forum</span></a></li>
                        <li><a href="{{ route('blog') }}"><span>Blog</span></a></li>
                        <li><a href="{{ route('how-to-start') }}"><span>Comment ça marche</span></a></li>
                        <li><a href="#"><span>Notre App</span></a></li>
                    </ul>
                </div>
                <div class="col-sm-2 d-flex justify-content-end">
                    <div class="lang item">
                        <a class="language" href="" rel="nofollow" title="Language">
                            <i class="fas fa-language"></i>
                            <span>العربية</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="dropdown-menu" aria-labelledby="dropdown-language">
    <a class="dropdown-item" id="en" rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}">
      <button style="position: relative; left: 430px; padding: 0px; width: 20%; border-radius: 20px; font-size: 18px;font-weight:bold ;" type="button" class="btn btn-outline-dark"><img width="22%" src="../images/translation.png" alt="">englesh</button>
    </a>
    <a class="dropdown-item" id="ar" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL("ar", null, [], true) }}">
      <button style="position: relative; left: 430px; padding: 0px; width: 20%; border-radius: 20px; font-size: 18px;font-weight:bold ;" type="button" class="btn btn-outline-dark"><img width="22%" src="../images/translation.png" alt=""> العربية</button>
    </a>
</div> --}}
