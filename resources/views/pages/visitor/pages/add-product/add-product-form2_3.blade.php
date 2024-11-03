@extends('layouts._master')
@section('title', 'Détail de bien')
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
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 active">
                        <div class="item" data-class="form2">
                            <span class="number">2</span>
                            <span class="text">Détail du bien</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
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
                <div class="form2">
                    <form action="{{ route('add-product-desc') }}" method="POST">
                        @csrf
                        @php $product_id = $product_id ? $product_id : Session::get('product_id')  @endphp
                        <input type="text" name="id" value="{{ $product_id }}" hidden>
                        <div class="form-body">
                            <h3>Détail du bien</h3>
                            <p class="require-field">
                                <span><i class="fas fa-info"></i></span> les champs avec (<span>*</span>) sont
                                obligatoires
                            </p>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="article_type" class="required">Type d'annonce</label>
                                    <select name="article_type" id="article_type" required>
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Vente</option>
                                        <option value="2">Location</option>
                                    </select>
                                    @error('article_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="rooms" >Chambres</label>
                                    <select name="rooms" id="rooms" required>
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Chambre</option>
                                        <option value="2">2 Chambres</option>
                                        <option value="3">3 Chambres</option>
                                        <option value="4">4 Chambres</option>
                                        <option value="5">5 Chambres</option>
                                        <option value="6">6 Chambres</option>
                                        <option value="7">7 Chambres</option>
                                        <option value="-1">Plus 7 Chambres</option>
                                    </select>
                                    @error('rooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="living_rooms">Salons</label>
                                    <select name="living_rooms" id="living_rooms">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Salon</option>
                                        <option value="2">2 Salons</option>
                                        <option value="3">3 Salons</option>
                                        <option value="-1">Plus 3 Salons</option>
                                    </select>
                                    @error('living_rooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="bathrooms">Salle de bains</label>
                                    <select name="bathrooms" id="bathrooms">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Salle</option>
                                        <option value="2">2 Salles</option>
                                        <option value="3">3 Salles</option>
                                        <option value="-1">Plus 3 Salles</option>
                                    </select>
                                    @error('bathrooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="surface">Surface</label>
                                    <div class="input distance-input">
                                        <div class="suffex">m2</div>
                                        <input class="distance" type="number" min="0" name="surface" id="">
                                    </div>
                                    @error('surface')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="floor">Étage</label>
                                    <select name="floor" id="floor">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Rez de la chaussé</option>
                                        <option value="7">1 Étage</option>
                                        <option value="7">2 Étage</option>
                                        <option value="7">3 Étage</option>
                                        <option value="7">4 Étage</option>
                                        <option value="7">5 Étage</option>
                                        <option value="7">6 Étage</option>
                                        <option value="7">Plus 6 Étage</option>
                                    </select>
                                    @error('floor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="age">Âge de bien</label>
                                    <div class="input distance-input">
                                        <div class="suffex">Ans</div>
                                        <input class="distance" type="number" name="age" id="">
                                    </div>
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="product_status">État du bien</label>
                                    <select name="product_status" id="product_status">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">État moyen</option>
                                        <option value="2">Bon état</option>
                                        <option value="3">Trés bon état</option>
                                        <option value="4">État neuf</option>
                                        <option value="5">Neuf jamais utilisé</option>
                                    </select>
                                    @error('product_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <h3 class="addition-info">Détail Complémontaire</h3>
                            <p>Selecte un ou plusieurs</p>

                            <div class="tags">
                                <div class="tag" id="tag">
                                    <label>Aascenseur</label>
                                    <input type="checkbox" value="Aascenseur" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Terrasse</label>
                                    <input type="checkbox" value="Terrasse" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Balcon</label>
                                    <input type="checkbox" value="Balcon" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Parking</label>
                                    <input type="checkbox" value="Parking" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Climatisation</label>
                                    <input type="checkbox" value="Climatisation" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Meublé</label>
                                    <input type="checkbox" value="Meublé" name="added_tags[]">
                                </div>

                                <div class="tag" id="tag">
                                    <label>Cuisine équipée</label>
                                    <input type="checkbox" value="Cuisine équipée" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Garage</label>
                                    <input type="checkbox" value="Garage" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Jardin</label>
                                    <input type="checkbox" value="Jardin" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Aire de jeu pour enfants</label>
                                    <input type="checkbox" value="Aire de jeu pour enfants" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Piscine</label>
                                    <input type="checkbox" value="Piscine" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Vidéo surveillance</label>
                                    <input type="checkbox" value="Vidéo surveillance" name="added_tags[]">
                                </div>

                                <div class="tag" id="tag">
                                    <label>Système d'alarme</label>
                                    <input type="checkbox" value="Système d'alarme" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Gardiennage</label>
                                    <input type="checkbox" value="Gardiennage" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Service de ménage</label>
                                    <input type="checkbox" value="Service de ménage" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Accés internet</label>
                                    <input type="checkbox" value="Accés internet" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>École à proximité</label>
                                    <input type="checkbox" value="école à proximité" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Tramway à proximité</label>
                                    <input type="checkbox" value="Tramway à proximité" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Marchés à proximité</label>
                                    <input type="checkbox" value="Marchés à proximité" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Gqre à proximité</label>
                                    <input type="checkbox" value="Gqre à proximité" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Université à proximité</label>
                                    <input type="checkbox" value="Université à proximité" name="added_tags[]">
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <button id="back-btn" class="previeus"><i class="fa-solid fa-angle-left"></i>
                                RETOUR</button>

                            <button type="submit" class="suivant">CONTINUER <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>



@endsection
