@extends('layouts._master')
@section('title', 'admar | categories')
@section('content')

    <div class="post">
        <div class="container">
            <div class="post-header">
                @include('layouts._brand-ads')
            </div>

            <div class="post-body">
                <span class="category">
                    Test Category
                </span>
                <h1 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, fugiat. Odit earum quis.
                </h1>

                <div class="meta row">
                    <div class="date col-sm-6"><i class="fa-solid fa-clock"></i> <span>2 Heures, 10:00</span></div>
                    <div class="social-share col-sm-6">
                        <span>Partager sur</span>
                        <a href="" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="" class="link"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="img">
                    <img src="{{ asset('assets/images/product4.jpg') }}" alt="">
                </div>

                <div class="post-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sequi accusantium quisquam nam sint qui blanditiis quibusdam quasi id et, omnis, beatae reiciendis deleniti perferendis, molestias modi vitae molestiae architecto.
                    Cum id repellat culpa, cumque adipisci totam minus asperiores laborum beatae laudantium ullam a corporis ut harum perspiciatis ipsam eligendi non sed quas iste. Alias reiciendis incidunt molestiae maxime vitae?
                    Consequuntur ea sequi sapiente eos velit deleniti excepturi quasi soluta ex, eligendi ipsum. Magni impedit facere veniam, dolorem nesciunt pariatur cumque reiciendis culpa commodi repellat dicta amet nobis repudiandae adipisci!
                    Voluptatum non facilis beatae laborum vero sit exercitationem omnis incidunt odio pariatur doloribus dolorem et perspiciatis ab distinctio id velit temporibus minima corporis nulla architecto ratione, ad magnam. Eius, quis!
                    Sed exercitationem odit fugit ad nisi consectetur natus modi itaque ullam hic necessitatibus, totam, reiciendis molestiae? Nam esse porro consequuntur corrupti voluptas commodi voluptatem dolore molestias deserunt? Deleniti, odio voluptas?
                    Deserunt voluptates consectetur ad at, ducimus reiciendis corporis esse quisquam laboriosam eum. Non pariatur dicta excepturi fuga distinctio, itaque quam architecto laborum necessitatibus molestias incidunt officiis autem quasi, mollitia magnam!
                    A, eaque. Iste in, tempore consequatur quas voluptates commodi, corrupti laborum exercitationem eius assumenda ipsa doloribus. Fugit quisquam earum, tempora illo optio illum maiores sunt ut. Pariatur totam cum tempora?
                    Accusantium consequuntur, voluptates ut deleniti alias officia ratione in similique libero adipisci voluptatum porro quo earum optio officiis facilis commodi vero quisquam enim, perferendis, consequatur omnis! Accusamus ut eum voluptatum.
                    Officiis voluptatem velit iusto facere! Numquam temporibus, eligendi quae dolor voluptas nihil id, sit minus, nostrum incidunt harum! Aliquid quasi mollitia suscipit, iste nostrum possimus iure dolor explicabo sed dolorum?
                    Quam adipisci impedit odit officiis dolore ipsum distinctio soluta dolorum nisi magni dolores nulla repellendus perspiciatis quidem unde fugit consectetur optio dolor, repudiandae mollitia. Excepturi maiores corporis incidunt accusantium architecto.
                </div>


                <div class="recommended-posts">
                    <h5>Vous aimrez peut-etre</h5>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="product">
                                <div class="header">
                                    <img src="{{ asset('assets/images/6.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/8.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/2.jpg') }}" alt="">
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
                    </div>
                </div>
            </div>
            <br>
        </div>
        @include('pages.visitor.sections._banner')
    </div>
@endsection
