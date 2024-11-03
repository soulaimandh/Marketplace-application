@extends('layouts._master')
@section('title', 'Informations générales')
@section('content')
    <div class="add-product">

        <div class="container">
            <div class="progress-bar">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 active">
                        <div class="item" data-class="form1">
                            <span class="number">1</span>
                            <span class="text">Informations générales</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
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
                <div class="form1">
                    <form action="{{ route('add-product-details') }}" method="POST">
                        @csrf
                        @php $category_id = $category_id ? $category_id : Session::get('category_id')  @endphp
                        <input type="text" name="category_id" value="{{$category_id}}" hidden>
                        <div class="form-body">
                            <h3>Information générales</h3>
                            <p class="require-field">
                                <span><i class="fas fa-info"></i></span> les champs avec (<span>*</span>) sont obligatoires
                            </p>
                            <div class="row">
                                <div class="col-sm-7">
                                    <label for="type" class="required">Type de bien</label>
                                    <select name="type" id="type" required
                                        class="@error('type') is-invalid @enderror">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Téléphones</option>
                                        <option value="2">Voitures</option>
                                        <option value="3">Appartements</option>
                                        <option value="4">Emploi et Services</option>
                                        <option value="5">Produit</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <p class="explanation">N'oubliez pas de poster l'annonce dans la bonne type</p>
                                </div>
                                <div class="col-sm-7">
                                    <label for="transaction_type" class="required">Type de transaction</label>
                                    <select name="transaction_type" id="transaction_type" required
                                        class="@error('transaction_type') is-invalid @enderror">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Paiment à la livraison</option>
                                        <option value="0">Paiment en ligne</option>
                                    </select>

                                    @error('transaction_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-sm-7">
                                    <label for="city" class="required">Ville</label>
                                    <select name="city" required class="@error('city') is-invalid @enderror">
                                        <option selected disabled>Choisissez votre ville</option>
                                        @include('components._cities')
                                    </select>

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="col-sm-7">
                                    <label for="sector" class="required">Secteur</label>
                                    <select name="sector" class="@error('city') is-invalid @enderror">
                                        <option selected disabled>Choisisez</option>
                                        <option value="1">Ameublement/Décoration</option>
                                        <option value="2">Automobile / Motos</option>
                                        <option value="3">Banque / Finance</option>
                                        <option value="4">Centre d'appel</option>
                                        <option value="5">Conseil / Etudes</option>
                                        <option value="6">Hôtellerie / Restauration</option>
                                        <option value="7">Pharmacie / Santé</option>
                                        <option value="8">IT/Development</option>
                                        <option value="9">Agriculture</option>
                                        <option value="10">Marché</option>
                                        <option value="-1">Other</option>
                                    </select>
                                    @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        </div>
                        <div class="actions">
                            <div></div>
                            <button type="submit" class="suivant">CONTINUER <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
