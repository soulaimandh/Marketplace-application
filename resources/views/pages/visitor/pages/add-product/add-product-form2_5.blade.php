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
                        {{$errors}}
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
                                    <label for="product_status" class="required">État du bien</label>
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
                                        <option value="0">No</option>
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
