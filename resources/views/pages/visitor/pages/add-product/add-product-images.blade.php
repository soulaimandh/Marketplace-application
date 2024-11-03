@extends('layouts._master')
@section('title', 'Photos')
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
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 active">
                        <div class="item" data-class="form4">
                            <span class="number">4</span>
                            <span class="text">Photos</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="item" data-class="form5">
                            <span class="number">5</span>
                            <span class="text">Vos informations</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div class="form4">
                    {{ $errors }}
                    <form action="{{ route('add-product-auth') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @php $product_id = $product_id ? $product_id : Session::get('product_id')  @endphp
                        <input type="text" name="id" value="{{ $product_id }}" hidden>
                        <div class="form-body">
                            <h3>Photos</h3>
                            <p class="require-field">
                                Photos(10 maximum). Utiliser des images réelle du produit
                            </p>
                            <br>
                            <div class="form-contianer row justify-content-center">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="image-input-wrapper">
                                        <div class="content">
                                            <i class="fas fa-camera"></i>
                                            <div class="add">Ajouter une image</div>
                                        </div>
                                        <input type="file" name="images[]" multiple id="images"
                                            onchange="loadFile(event)">
                                    </div>

                                    @error('images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-9 col-md-8 col-sm-6">
                                    <div class="images-wrapper">
                                        <div class="images">
                                            <div class="spiner d-none">
                                                <i class="fa-solid fa-spinner fa-spin fa-xl"></i>
                                            </div>

                                            <div class="img d-none">
                                                <span class="delete">X</span>
                                                {{-- <img src="{{asset('assets/images/logo.png')}}" alt="" id="image"> --}}
                                                <span class="done"><i class="fa-solid fa-check"></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advices">
                                <h5>
                                    Conseils
                                </h5>
                                <ul>
                                    <li class="advice">Ajoutez plusieurs photos pour augmenter vos chances d'étre
                                        contacté
                                    </li>
                                    <li class="advice">Une annonce avec photos est 20 fois plus consltée qu'une annonce
                                        sans photos</li>
                                    <li class="advice">Ajouter des photos de bonnes qualités et bien éclairées</li>
                                    <li class="advice">C'est la premiére impression qui comptel</li>
                                    <li class="advice">Une Photo vaut mieux que mille mots</li>
                                </ul>
                            </div>
                        </div>


                        <div class="actions">
                            <button id="back-btn" class="previeus"><i class="fa-solid fa-angle-left"></i>
                                RETOUR</button>

                            <button type="submit" class="suivant">CONTINUER <i
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
                            <div class="radio"><input type="radio" name="status"><span>Publier tout
                                    de suite</span></div>
                            <div class="radio"><input type="radio" name="status"><span>Enregistrer</span></div>
                            <div class="radio"><input type="radio" name="status"><span>Programmer</span></div>
                            <div class="date">
                                <input type="date" name="start_at_date">
                                <input type="time" name="start_at_time">
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
@section('javascript')
    <script src="{{ asset('assets/visitor/js/show-images.js') }}"></script>
@endsection
