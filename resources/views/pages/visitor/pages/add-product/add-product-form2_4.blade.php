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
                                    <label for="sector" class="required">Secteur</label>
                                    <select name="sector" id="sector" required>
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Ameublement/Décoration </option>
                                        <option value="2">Automobile / Motos </option>
                                        <option value="3">Banque / Finance </option>
                                        <option value="4">Centre d'appel </option>
                                        <option value="5">Conseil / Etudes </option>
                                        <option value="6">Hôtellerie / Restauration </option>
                                        <option value="7">Pharmacie / Santé </option>
                                        <option value="8">IT/Development </option>
                                        <option value="9">Agriculture </option>
                                        <option value="10">Marché </option>
                                        <option value="-1">Other </option>
                                    </select>
                                    @error('sector')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="offer_lang" >Langue de poste</label>
                                    <select name="offer_lang" id="offer_lang" required>
                                        <option selected disabled>Choisisez</option>
                                        <option value="0">Français</option>
                                        <option value="1">Arabic</option>
                                        <option value="2">Anglais</option>
                                        <option value="3">Espagnol</option>
                                        <option value="4">Amazigh</option>
                                        <option value="5">Italien</option>
                                        <option value="6">Allmand</option>
                                        <option value="-1">Autre</option>
                                    </select>
                                    @error('offer_lang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="experience">Expérience</label>
                                    <select name="experience" id="experience">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Débutant</option>
                                        <option value="2">Moins de 1 an</option>
                                        <option value="3">De 1 à 3 ans</option>
                                        <option value="4">De 3 à 5 ans</option>
                                        <option value="5">De 5 à 7 ans</option>
                                        <option value="6">De 7 à 10 ans</option>
                                        <option value="-1">10 ans et Plus</option>
                                    </select>
                                    @error('experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="contract_type">Type de contrat</label>
                                    <select name="contract_type" id="contract_type">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">CDI</option>
                                        <option value="2">CDD</option>
                                        <option value="3">Freelance</option>
                                        <option value="4">Intérim</option>
                                        <option value="5">Stage</option>
                                        <option value="-1">Autre</option>
                                    </select>
                                    @error('contract_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="work_time">Temps de travail</label>
                                    <select name="work_time" id="work_time">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Temps plein</option>
                                        <option value="2">Temps partiel</option>
                                    </select>
                                    @error('work_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="education_level">Niveau d'étude</label>
                                    <select name="education_level" id="education_level">
                                        <option selected disabled>Choisisez</option>
                                        <option value="Bac">Bac</option>
                                        <option value="Bac+1">Bac+1</option>
                                        <option value="Bac+2">Bac+2</option>
                                        <option value="Bac+3">Bac+3</option>
                                        <option value="Bac+4">Bac+4</option>
                                        <option value="Bac+5">Bac+5</option>
                                        <option value="Bac+6">Bac+6</option>
                                        <option value="Bac+7">Bac+7</option>
                                        <option value="-1">Auter</option>
                                    </select>
                                    @error('education_level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
