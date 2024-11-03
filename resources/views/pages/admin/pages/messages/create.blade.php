@extends('admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{ __('admin/globale.create') }} {{ __('admin/globale.message') }}</div>
                <div class="other-page">
                    <a href="{{ route('members.index') }}">
                        <span>
                            <i class="fa-solid fa-list-check"></i>{{ __('admin/globale.all_messages') }}
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

                    <form class="form" action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <div class="section">
                            <div class="title">{{ __('admin/globale.message_info') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="name">{{ __('admin/globale.fullname') }}</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" />
                                    @if ($errors->has('name'))
                                        <span class="help-block">{!! $errors->first('name') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="email">{{ __('admin/globale.email') }}</label>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" />
                                    @if ($errors->has('email'))
                                        <span class="help-block">{!! $errors->first('email') !!}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="subject">{{ __('admin/globale.subject') }}</label>
                                    <input type="text" name="subject" id="subject" value="{{ old('subject') }}" />
                                    @if ($errors->has('subject'))
                                        <span class="help-block">{!! $errors->first('subject') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="type">{{ __('admin/globale.type') }}</label>
                                    <select id="type" name="type">
                                        <option value="" selected disabled>{{ __('admin/globale.select_msg_type') }}</option>
                                        <option value="0">{{ __('admin/globale.msg_recieved') }}</option>
                                        <option value="1">{{ __('admin/globale.msg_sended') }}</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="help-block">{!! $errors->first('type') !!}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="message">{{ __('admin/globale.message') }}</label>
                                    <textarea name="message" id="message" rows="8">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="help-block">{!! $errors->first('message') !!}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="created_at">{{ __('admin/globale.date') }}</label>
                                    <input type="date" name="created_at" id="created_at" value="{{ old('created_at') }}" />                                    @if ($errors->has('created_at'))
                                        <span class="help-block">{!! $errors->first('created_at') !!}</span>
                                    @endif
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
