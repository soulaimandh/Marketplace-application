@extends('admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{ __('admin/globale.all_members') }}</div>
                <div class="other-page">
                    <a href="{{ route('members.create') }}">
                        <span>
                            <i class="fa-solid fa-plus"></i>{{ __('admin/globale.create') }}
                            {{ __('admin/globale.member') }}
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

                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')

                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <table id="members" class="table display nowrap table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th>{{ __('admin/globale.avatar') }}</th>
                                        <th>{{ __('admin/globale.fullname') }}</th>
                                        <th>{{ __('admin/globale.email') }}</th>
                                        <th>{{ __('admin/globale.phone') }}</th>
                                        <th>{{ __('admin/globale.role') }}</th>
                                        <th>{{ __('admin/globale.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($members)
                                        @foreach ($members as $member)
                                            <tr>
                                                <td>
                                                    @if ($member->avatar == '')
                                                        <img style="width: 100px; height: 100px;" class="rounded-circle"
                                                            src="{{ asset('assets/images/members/avatar.png') }}">
                                                    @else
                                                        <img style="width: 100px; height: 100px;" class="rounded-circle"
                                                            src="{{ $member->avatar() }}">
                                                    @endif
                                                </td>
                                                <td>{{ $member->lastname }} {{ $member->firstname }}</td>
                                                <td>{{ $member->email }}</td>
                                                <td>{{ $member->phone }}</td>
                                                <td>{{ $member->role }}</td>
                                                <td>
                                                    <a href="{{ route('members.edit', $member) }}"
                                                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ __('admin/globale.edit') }}</a>

                                                    <a onclick="document.getElementById('id01').style.display='block'"
                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ __('admin/globale.delete') }}</a>
                                                    <div id="id01" class="modal">
                                                        <form class="modal-content" action="/action_page.php">
                                                            @csrf
                                                            <div class="container">
                                                                <h1>{{ __('admin/globale.delete_title') }}</h1>
                                                                <p>{{ __('admin/globale.are_you_sure_delete') }}</p>

                                                                <div class="clearfix">
                                                                    <button type="button" class="cancelbtn"
                                                                        onclick="document.getElementById('id01').style.display='none'">{{ __('admin/globale.cancel') }}</button>
                                                                    <button type="button" class="deletebtn"><a
                                                                            href="{{ route('members.destroy', $member) }}">{{ __('admin/globale.delete') }}</a></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <a href="{{ route('members.status', $member) }}"
                                                        class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">
                                                        {{ $member->getActive() }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@include('admin.includes._dataTable')
