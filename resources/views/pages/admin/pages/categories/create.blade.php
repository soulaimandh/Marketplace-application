@extends('pages.admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">Créer Catégorie </div>
                <div class="other-page">
                    <a href="{{ route('categories.index') }}">
                        <span>
                            <i class="fa-solid fa-list-check"></i>Toutes les catégories
                        </span>
                    </a>
                </div>
            </div>
            <div class="page-body" id="page-body">
                <ul class="body-actions">
                    <li class="close-body" id="close-body">
                        <i class="fas fa-close"></i>
                    </li>
                    <li class='minimize' id="hide-body">
                        <i class="fa-solid fa-window-minimize"></i>
                    </li>
                    <li class="fscreen" id="page-full-screen">
                        <i class="fa-solid fa-arrows"></i>
                    </li>
                </ul>
                <div class="body-content" id="body-content">

                    <form class="form" action="{{ route('categories.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="section">
                            <div class="title">Information</div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="field">
                                    <div class="@if ($errors->has('name')) has-error @endif">
                                        <label>Nom</label>
                                        <input type="text" name="name">
                                        @if ($errors->has('name'))
                                            <span class="help-block">{!! $errors->first('name') !!}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="parent_id">Ctégorie</label>
                                    <select id="parent_id" name="parent_id">
                                        @if (ParentCategories() && ParentCategories()->count() > 0)
                                            <option value="" selected disabled>Choissisez la catégorie père
                                            </option>
                                            @foreach (ParentCategories() as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('parent_id'))
                                        <span class="help-block">{!! $errors->first('parent_id') !!}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="action btn btn-warning" type="button">
                                    <i class="fas fa-back"></i> Annuler
                                </button>
                                <button class="action btn btn-primary" type="submit">
                                    <i class="fas fa-save"></i> Enregistrer
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
