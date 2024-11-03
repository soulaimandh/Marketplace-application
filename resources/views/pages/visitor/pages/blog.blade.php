@extends('layouts._master')
@section('title', 'admar | blog')
@section('content')
    <div class="blog">
        <div class="container">
            <div class="blog-header">
                <div class="img">
                    <img src="{{ asset('assets/images/blog-header.png') }}" alt="">
                    <h3>admar site de petites annonces gratuites au Maroc</h3>
                </div>
                <div class="categories-menu">
                    <div id="links">
                        <a class="category active" href="#">
                            Toutes
                        </a>
                        <a class="category" href="#">
                            Vehicule
                        </a>
                        <a class="category" href="#">
                            Informatique et Multimedia
                        </a>
                        <a class="category" href="#">
                            Imobiler
                        </a>
                        <a class="category" href="#">
                            Emploi et Services
                        </a>
                        <a class="category" href="#">
                            Maison et jardin
                        </a>
                        <a class="category" href="#">
                            Loisire et Divertissement
                        </a>
                    </div>
                    <div id="more">
                        <span id="more-label">></span>
                        <div id="overflow">
                        </div>
                    </div>
                </div>
                <div id="debug"></div>
                <div id="debug2"></div>
                <div id="debug3"></div>
            </div>

            <div class="blog-body">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/13.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: red; background-color:rgba(255,0,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/11.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: green; background-color:rgba(0,255,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/12.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: blue; background-color:rgba(0,0,255,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/12.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: red; background-color:rgba(255,0,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/6.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: green; background-color:rgba(0,255,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/8.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: blue; background-color:rgba(0,0,255,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/product1.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: red; background-color:rgba(255,0,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/11.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: green; background-color:rgba(0,255,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: blue; background-color:rgba(0,0,255,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/product6.png') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: red; background-color:rgba(255,0,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/product5.jpg') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: green; background-color:rgba(0,255,0,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="header">
                                        <img src="{{ asset('assets/images/product6.png') }}" alt="">
                                    </div>
                                    <div class="body">
                                        <a class="category" style="color: blue; background-color:rgba(0,0,255,.1)"
                                            href="a">
                                            Test category
                                        </a>
                                        <a class="title" href="">
                                            Lorem ipsum dolor sit amet.
                                        </a>
                                        <p class="summery">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quas possimus
                                            quod ipsa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('pages.visitor.sections._pagination')
                <br>
            </div>
        </div>
        @include('pages.visitor.sections._banner')
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('assets/visitor/js/overflow-menu.js') }}"></script>
@endsection
