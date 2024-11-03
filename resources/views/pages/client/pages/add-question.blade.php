@extends('layouts._master')
@section('title', 'Forum')
@section('content')

    <div class="add-question">
        <div class="container">
            @include('layouts._brand-ads')

            <form action="#" method="POST">
                @csrf
                <div class="form-body">
                    <h3>Écrire une nouvelle discussion</h3>
                    <p class="require-field">
                        Lancez une conversation, posez une question ou partagez votre idée.
                    </p>

                    <label for="title" class="required">Titre</label>
                    <input type="text" name="title" id="title" placeholder="Titre court de descriptif" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="description" class="required">Description</label>
                    <textarea type="text" name="description" id="description" placeholder="Décrivew votre description en détail" rows="10"
                        required></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="tags" class="required">Mots clés (optionnel)</label>
                    <input type="text" class="form-control tagify" name="tags" id="tags"
                        placeholder="Veuillez choisir des mots-clés oppropriés Ex: hyundai i30 hyundai occassion" rows="10" required>
                    @error('tags')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="user_id" class="required">Votre identifiant (optionnel)</label>
                    <input type="text" class="form-control tagify" name="user_id" id="user_id"
                        placeholder="Votre identifiant" rows="10" required>
                    @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="footer-terms">
                        <input type="checkbox" name="terms"> J'accepte les <a href="">termes et conditions</a> et <a href="">politique de confidentialité</a> de site <a href="https://admar.ma">admar.ma</a>
                    </div>
                    <button type="submit" class="submit">PUBLIER </button>

                </div>
            </form>

        </div>
        </form>
    </div>
    </div>

@endsection
