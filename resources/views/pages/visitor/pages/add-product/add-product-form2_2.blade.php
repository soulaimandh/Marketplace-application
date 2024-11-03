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
                                    <label for="mark" class="required">Marque</label>
                                    <select name="mark" id="mark" required>
                                        <option selected disabled>Choisisez</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="Audi">Audi</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Citroen">Citroen</option>
                                        <option value="Dacia">Dacia</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Acura">Acura</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="Buick">Buick</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Infiniti">Infiniti</option>
                                        <option value="GMC">GMC</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="Dodge">Dodge</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="Jaguar">Jaguar</option>
                                        <option value="Maserati">Maserati</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Mini">Mini</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Tesla">Tesla</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Kia">Kia</option>
                                        <option value="-1">Other</option>
                                    </select>
                                    @error('mark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="model" class="required">Modéle</label>
                                    <input type="text" name="model">
                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="fiscal_power">Puissance fiscale</label>
                                    <select name="fiscal_power" id="fiscal_power">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Moins 4 CV</option>
                                        <option value="5">5 CV</option>
                                        <option value="6">6 CV</option>
                                        <option value="7">7 CV</option>
                                        <option value="8">8 CV</option>
                                        <option value="9">9 CV</option>
                                        <option value="10">10 CV</option>
                                        <option value="11">11 CV</option>
                                        <option value="12">12 CV</option>
                                        <option value="13">13 CV</option>
                                        <option value="-1">Plus 13 CV</option>
                                    </select>
                                    @error('fiscal_power')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="gearbox">Boite de vitesse</label>
                                    <select name="gearbox" id="gearbox">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Automatique</option>
                                        <option value="2">Manuelle</option>
                                    </select>
                                    @error('gearbox')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="doors_number">Nombre de portes</label>
                                    <select name="doors_number" id="doors_number">
                                        <option selected disabled>Choisisez</option>
                                        <option value="3">3 Portes</option>
                                        <option value="5">5 Portes</option>
                                    </select>
                                    @error('doors_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="first_hand">Premiére main</label>
                                    <select name="first_hand" id="first_hand">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                    @error('first_hand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="fuel">Carburnat</label>
                                    <select name="fuel" id="fuel">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Diesel</option>
                                        <option value="2">Essence</option>
                                        <option value="3">Electrique</option>
                                        <option value="4">Hydrogéne</option>
                                        <option value="5">Hybride</option>
                                    </select>
                                    @error('fuel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="year">Année</label>
                                    <select name="year" id="year">
                                        <option selected disabled>Choisisez</option>
                                        @for($i=1960; $i<2031; $i++)
                                                <option value="i">{{$i}}</option>
                                        @endfor
                                        
                                    </select>
                                    @error('year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="mileage">Kiloétrage</label>
                                    <div class="input distance-input">
                                        <div class="suffex">km</div>
                                        <input class="distance" type="text" name="mileage"
                                            data-class="mileage-progress" id="">
                                    </div>
                                    @error('mileage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="origin">Origine</label>
                                    <input class="distance" placeholder="Tapez l'origine" type="text" name="origin">
                                    @error('origin')
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


                                <div class="col-sm-4">
                                    <label for="exchange">Exchange possible</label>
                                    <select name="exchange" id="exchange">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                    @error('exchange')
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
                                    <label>Janter aluminum</label>
                                    <input type="checkbox" value="Janter aluminum" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Airbags</label>
                                    <input type="checkbox" value="Airbags" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Climatisation</label>
                                    <input type="checkbox" value="Climatisation" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Système de navigation/GPS</label>
                                    <input type="checkbox" value="Système de navigation/GPS" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Toit ouvrant</label>
                                    <input type="checkbox" value="Toit ouvrant" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Intérieur cuir</label>
                                    <input type="checkbox" value="Intérieur cuir" name="added_tags[]">
                                </div>

                                <div class="tag" id="tag">
                                    <label>Radar de recul</label>
                                    <input type="checkbox" value="Radar de recul" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Caméra de recul</label>
                                    <input type="checkbox" value="Caméra de recul" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Vitres électriques</label>
                                    <input type="checkbox" value="Vitres électriques" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>ABS</label>
                                    <input type="checkbox" value="ABS" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Système d'alarme</label>
                                    <input type="checkbox" value="Système d'alarme" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Régulqteur de vitesse</label>
                                    <input type="checkbox" value="Régulqteur de vitesse" name="added_tags[]">
                                </div>

                                <div class="tag" id="tag">
                                    <label>Anti patinage</label>
                                    <input type="checkbox" value="Anti patinage" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Limiteur de vitesse</label>
                                    <input type="checkbox" value="Limiteur de vitesse" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>CD/MP3/Blutooth</label>
                                    <input type="checkbox" value="CD/MP3/Blutooth" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Verrouillage centralisé</label>
                                    <input type="checkbox" value="Verrouillage centralisé" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Volant réglable</label>
                                    <input type="checkbox" value="Volant réglable" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Anti démarage</label>
                                    <input type="checkbox" value="Anti démarage" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Détecteur de pluie</label>
                                    <input type="checkbox" value="Détecteur de pluie" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Direction assistée</label>
                                    <input type="checkbox" value="Direction assistée" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>Anti brouillard</label>
                                    <input type="checkbox" value="Anti brouillard" name="added_tags[]">
                                </div>
                                <div class="tag" id="tag">
                                    <label>ESP</label>
                                    <input type="checkbox" value="ESP" name="added_tags[]">
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
