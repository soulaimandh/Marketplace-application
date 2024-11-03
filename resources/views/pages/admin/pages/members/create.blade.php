@extends('admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{__('admin/globale.create')}} {{__('admin/globale.member')}}</div>
                <div class="other-page">
                    <a href="{{route('members.index')}}">
                        <span>
                            <i class="fa-solid fa-list-check"></i>{{__('admin/globale.all_members')}}
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

                    <form class="form" action="{{ route('members.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="section">
                            <div class="title">{{__('admin/globale.avatar')}}</div>
                        </div>
                        <div class="logo">
                            <label htmlFor="avatar">{{__('admin/globale.upload')}}
                                <i class="fas fa-cloud-upload"></i>
                                <input type="file" name="avatar" id="avatar" value="{{ old('avatar') }}"/>
                            </label>
                            @if ($errors->has('avatar'))
                            <span class="help-block">{!! $errors->first('avatar') !!}</span>
                        @endif
                        </div>
                        <div class="section">
                            <div class="title">{{__('admin/globale.member_info')}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="field">
                                    <label htmlFor="firstname">{{__('admin/globale.first_name')}}</label>
                                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}"/>
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">{!! $errors->first('firstname') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field">
                                    <label htmlFor="lastname">{{__('admin/globale.last_name')}}</label>
                                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}"/>
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">{!! $errors->first('lastname') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field">
                                    <label htmlFor="email">{{__('admin/globale.email')}}</label>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}"/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">{!! $errors->first('email') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field">
                                    <label htmlFor="phone">{{__('admin/globale.phone')}}</label>
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}"/>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">{!! $errors->first('phone') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="role">{{__('admin/globale.role')}}</label>
                                    <input type="text" name="role" id="role" value="{{ old('role') }}"/>
                                    @if ($errors->has('role'))
                                        <span class="help-block">{!! $errors->first('role') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="userType">{{__('admin/globale.privilage')}}</label>
                                    <select id="userType" name="userType">
                                            <option value="" selected disabled>{{__('admin/globale.select_privilage')}}</option>
                                                <option value="member">{{__('admin/globale.member')}}</option>
                                                <option value="financer">{{__('admin/globale.finance')}}</option>
                                                <option value="writer">{{__('admin/globale.writer')}}</option>
                                                <option value="admin">{{__('admin/globale.admin')}}</option>

                                    </select>
                                    @if ($errors->has('userType'))
                                        <span class="help-block">{!! $errors->first('userType') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="password">{{__('admin/globale.password')}}</label>
                                    <input type="password" name="password" id="password" autocomplete="new-password"/>
                                    @if ($errors->has('password'))
                                        <span class="help-block">{!! $errors->first('password') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="CheckStatus" >{{__('admin/globale.status')}}</label>
                                    <div class="switch" id="CheckStatus">
                                        <input name="status" type="checkbox" id="CheckStatusInput" checked=true />
                                        <span class="slider round"></span>
                                    </div>
                                </div>
                                </div>
                        </div>


                        <div class="form-actions">
                            <button class="action btn btn-warning" type="button">
                                <i class="fas fa-back"></i> {{__('admin/globale.back')}}
                            </button>
                            <button class="action btn btn-primary" type="submit">
                                <i class="fas fa-save"></i> {{__('admin/globale.save')}}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
