<div class="modal fade" id="make-order" tabindex="-1" role="dialog" aria-labelledby="make-orderTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  mw-100 w-75" role="document">
        <div class="modal-content product-modal make-order-modal">
            <div class="close" type="button" data-dismiss="modal">X</div>
            <div class="modal-carte-content">
                <div class="hero">
                    <i class="fa-solid fa-box"></i> Confirmer les commandes
                </div>
                <form action="{{ route('add-product-status') }}" method="POST" class="make-order-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section">
                                @csrf
                                <div class="form-body">
                                    <p>
                                        Veuillez remplir le formilaire pour confirmer la commande !
                                    </p>
                                    <div class="register-form">

                                        <label class="required" for="name">Nome et Prénom</label>
                                        <div class="input">
                                            <div class="prifix"><i class="fa-solid fa-user"></i></div>
                                            <input type="tetx" name="name" placeholder="votre nom et prénom"
                                                class="@error('name') is-invalid @enderror" required>
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label class="required" for="phone">Téléphone</label>
                                        <div class="input">
                                            <div class="prifix"><i class="fa-solid fa-mobile"></i></div>
                                            <input type="tetx" name="phone" placeholder="Votre numéro de téléphone"
                                                class="@error('phone') is-invalid @enderror" required>
                                        </div>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="product_status">Ville</label>
                                        <div class="input">
                                            <select name="city" required class="@error('city') is-invalid @enderror">
                                                <option selected disabled>Choisissez votre ville</option>
                                                @include('components._cities')
                                            </select>
                                        </div>
                                        @error('product_status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="description" class="required">Adresse</label>
                                        <textarea type="text" name="description" id="description" placeholder="Votre Adresse" rows="4" required></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section">
                                <div class="img"><img src="{{ asset('assets/images/product3.jpg') }}" alt="">
                                </div>
                                <h3 class="product-title">
                                    Samsung Galaxy S30s
                                </h3>
                                <div class="product-price">
                                <div class="price">3 500 DH</div>
                                <div class="livraison"><i class="fa-solid fa-hand-holding-dollar"></i>Paiment à la livraison</div>
                            </div>
                                <div class="quantity">
                                    <div class="name">
                                        Quantité
                                    </div>
                                    <div class="value">
                                        <span class="qt-minus">-</span>
                                        <span class="qt">1</span>
                                        <span class="qt-plus">+</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="price">
                                    <div class="name">
                                        Prix de l'annonce
                                    </div>
                                    <div class="value">
                                    3 500
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="name">
                                        Total
                                    </div>
                                    <div class="value">
                                    <span>3 500</span> DH
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <button id="back-btn-modal" class="previeus">
                            ANNULER</button>

                        <button type="submit" class="suivant">VALIDER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
