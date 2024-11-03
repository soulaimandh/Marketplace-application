@extends('layouts._master')
@section('title', 'Décrivez votre bie')
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
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 active">
                        <div class="item" data-class="form3">
                            <span class="number">3</span>
                            <span class="text">Décrivez votre bien</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
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
                <div class="form3">
                    <form action="{{ route('add-product-images') }}" method="POST">
                        @csrf
                        <input type="text" name="id" value="{{ $product_id }}" hidden>
                        <div class="form-body">
                            <h3>Décrivez votre bien</h3>
                            <p class="require-field">
                                <span><i class="fas fa-info"></i></span> les champs avec (<span>*</span>) sont
                                obligatoires
                            </p>
                            <div class="row">
                                <div class="col-sm-7">
                                    <label for="title" class="required">Titre du produit</label>
                                    <input type="text" name="title" id="title" placeholder="Titre du produit"
                                        required>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <p class="explanation">Donnez à votre annonce un titre parce qu'il est le plus
                                        important</p>
                                </div>

                                <div class="col-sm-7">
                                    <div class="price">
                                        <div class="suffex">DH</div>
                                        <label for="price">Prix</label>
                                        <input type="number" name="price" id="price" value="0" min="0">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <p class="explanation">Indiquez le prix exact de l'article Une annonce sans prix
                                        aura moins de vue.</p>
                                </div>

                                <div class="col-sm-7">
                                    <div class="price">
                                        <div class="suffex">DH</div>
                                        <label for="price">Comparer au prix</label>
                                        <input type="number" name="faster-price" id="faster-price" value="0" min="0">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <p class="explanation">Indiquez la réduction pour vendre l'article plus rapidement.</p>
                                </div>

                                <div class="col-sm-7">
                                    <label for="description" class="required">Description du produit</label>
                                    <textarea type="text" name="description" id="description_" placeholder="Description du produi" rows="10"
                                        required></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <p class="explanation">Donnez une description détaillée de votre produit N'indiquez
                                        pas vos coordonnées (e-mail, téléphones, ...) dans la description.
                                    </p>
                                </div>


                                <div class="col-sm-7">
                                    <label for="tags" class="required">Mots clés</label>
                                    <input type="text" class="form-control tagify" name="tags" id="tags"
                                        placeholder="Ajouter des mots clés" rows="10" required>
                                    @error('tags')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <p class="explanation">Entrer les mots clés séparés par des virgules
                                    </p>
                                </div>
                                <div class="col-12">
                                    <label for="">Variantes</label>
                                    <br>
                                    <div class="switch-section">
                                    <label class="switch">
                                        <input type="checkbox" id="show-add-option">
                                        <span class="slider round"></span>
                                    </label>
                                    <span class="switch-span">Ajouter des Variantes (Taille, Coleur, matiére... etc)</span>
                                    </div>
                                    <div class="add-option-container">
                                        <div id="add-option-wrapper">
                                            <div class="add-option">
                                                <i class="fas fa-bars"></i> Option<span class="option-number">1</span>
                                                <div class="row">
                                                    <div class="col-md-4"><input type="text" name="added_option_name[]"
                                                            placeholder="le nom d'option" id=""></div>
                                                    <div class="col-md-6"><input name='added_option_value[]'
                                                            placeholder="les valeurs séparés par des virgules"
                                                            class="form-control tagify"></div>
                                                    <div class="col-md-2">
                                                        <div class="remove" id="remove"><i
                                                                class="fa-solid fa-trash-can"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-option-btn" id="add-option-btn">
                                            <span>+</span> Ajouter une option
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="actions">
                            <button id="back-btn" class="previeus"><i class="fa-solid fa-angle-left"></i>
                                RETOUR</button>

                            <button type="submit" class="suivant">CONTINUER <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('assets/visitor/js/add-section.js') }}"></script>
@endsection
