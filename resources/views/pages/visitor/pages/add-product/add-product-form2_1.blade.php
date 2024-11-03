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
                                        <option value="Samsung">Samsung</option>
                                        <option value="LG">LG</option>
                                        <option value="Oppo">Oppo</option>
                                        <option value="Vivo">Vivo</option>
                                        <option value="Nokia">Nokia</option>
                                        <option value="Infinix">Infinix</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Xiaomi">Xiaomi</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Redmi">Redmi</option>
                                        <option value="Other">Other</option>
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
                                    <label for="ram">RAM</label>
                                    <select name="ram" id="ram">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Moins 512 MB</option>
                                        <option value="1">1 GB</option>
                                        <option value="2">2 GB</option>
                                        <option value="3">3 GB</option>
                                        <option value="4">4 GB</option>
                                        <option value="5">5 GB</option>
                                        <option value="6">6 GB</option>
                                        <option value="7">7 GB</option>
                                        <option value="8">8 GB</option>
                                        <option value="9">9 GB</option>
                                        <option value="10">10 GB</option>
                                        <option value="12">12 GB</option>
                                        <option value="16">16 GB</option>
                                        <option value="24">24 GB</option>
                                        <option value="32">32 GB</option>
                                        <option value="64">64 GB</option>
                                        <option value="128">128 GB</option>
                                        <option value="-1">Plus 128 GB</option>
                                    </select>
                                    @error('ram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="storage">Stockage</label>
                                    <select name="storage" id="storage">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Moins 4 GB</option>
                                        <option value="8">8 GB</option>
                                        <option value="16">16 GB</option>
                                        <option value="32">32 GB</option>
                                        <option value="64">64 GB</option>
                                        <option value="128">128 GB</option>
                                        <option value="256">256 GB</option>
                                        <option value="512">512 GB</option>
                                        <option value="-1">Plus 512 GB</option>
                                    </select>
                                    @error('storage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="screen_size">Taille de l'écran</label>
                                    <select name="screen_size" id="screen_size">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Moins 4 Pouces</option>
                                        <option value="4.1 - 5">4.1 - 5 Pouses</option>
                                        <option value="5.1 - 6">5.1 - 6 Pouses</option>
                                        <option value="-1">Plus 6.1 Pouses</option>
                                    </select>
                                    @error('screen_size')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="battery">Batterie</label>
                                    <select name="battery" id="battery">
                                        <option selected disabled>Choisisez</option>
                                        <option value="au Plomb">au Plomb</option>
                                        <option value="Nickel-Cadmium">Nickel-Cadmium</option>
                                        <option value="Lithium ion">Lithium ion</option>
                                        <option value="Lithium polymère (Li-Po)">Lithium polymère (Li-Po)</option>
                                        <option value="Nickel-Métal Hydrure">Nickel-Métal Hydrure</option>
                                    </select>
                                    @error('battery')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="fast_charge">Charge rapide</label>
                                    <select name="fast_charge" id="fast_charge">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                    @error('fast_charge')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="back_camera">Caméra arriére</label>
                                    <select name="back_camera" id="back_camera">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Moins 4 MG Pixel</option>
                                        <option value="6">6 MG Pixel</option>
                                        <option value="8">8 MG Pixel</option>
                                        <option value="12">12 MG Pixel</option>
                                        <option value="16">16 MG Pixel</option>
                                        <option value="20">20 MG Pixel</option>
                                        <option value="30">30 MG Pixel</option>
                                        <option value="64">64 MG Pixel</option>
                                        <option value="-1">Plus 64 MG Pixel</option>
                                    </select>
                                    @error('back_camera')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="front_camera">Caméra seilfie</label>
                                    <select name="front_camera" id="front_camera">
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Moins 4 MG Pixel</option>
                                        <option value="6">6 MG Pixel</option>
                                        <option value="8">8 MG Pixel</option>
                                        <option value="12">12 MG Pixel</option>
                                        <option value="16">16 MG Pixel</option>
                                        <option value="20">20 MG Pixel</option>
                                        <option value="30">30 MG Pixel</option>
                                        <option value="64">64 MG Pixel</option>
                                        <option value="-1">Plus 64 MG Pixel</option>
                                    </select>
                                    @error('front_camera')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="product_status">État du bien</label>
                                    <select name="product_status" id="product_status_">
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

                                <div class="col-sm-4">
                                    <label for="delivery">Livraison disponible</label>
                                    <select name="delivery" id="delivery">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Livraison à domicile</option>
                                        <option value="2">Livraison en point relais</option>
                                        <option value="3">Le retrait en magasin</option>
                                        <option value="4">livraison standard</option>
                                        <option value="5">Livraison express</option>
                                        <option value="6">Livraison sur rendez-vous</option>
                                    </select>
                                    @error('delivery')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                        </div>
                        <div class="actions">
                            <button id="back-btn" class="previeus"><i class="fa-solid fa-angle-left"></i> RETOUR</button>

                            <button type="submit" class="suivant">CONTINUER <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>



@endsection
