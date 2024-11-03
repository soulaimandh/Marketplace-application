@extends('admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{ __('admin/globale.create') }} {{ __('admin/globale.tag') }}</div>
                <div class="other-page">
                    <a href="{{ route('tags.index') }}">
                        <span>
                            <i class="fa-solid fa-list-check"></i>{{ __('admin/globale.all_tags') }}
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

                    <form class="form" action="{{ route('tags.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="section">
                            <div class="title">{{ __('admin/globale.tag_info') }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="field">
                                    <div class="@if ($errors->has('name')) has-error @endif">
                                        <label>{{ __('admin/globale.name') }}</label>
                                        <input type="text" name="name">
                                        @if ($errors->has('name'))
                                            <span class="help-block">{!! $errors->first('name') !!}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field">
                                        <div class="@if ($errors->has('description')) has-error @endif">
                                            <label>{{ __('admin/globale.description') }}</label>
                                            <input type="text" name="description">
                                            @if ($errors->has('description'))
                                                <span class="help-block">{!! $errors->first('description') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field">
                                    <date-picker></date-picker>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="CheckStatus">{{ __('admin/globale.status') }}</label>
                                    <div class="switch" id="CheckStatus">
                                        <input name="status" type="checkbox" id="CheckStatusInput" checked=true />
                                        <span class="slider round"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="action btn btn-warning" type="button">
                                    <i class="fas fa-back"></i> {{ __('admin/globale.back') }}
                                </button>
                                <button class="action btn btn-primary" type="submit">
                                    <i class="fas fa-save"></i> {{ __('admin/globale.save') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
