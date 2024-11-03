@extends('admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{ __('admin/globale.msgs_sended') }}</div>
                <div class="other-page">
                    <a href="{{ route('messages.create') }}">
                        <span>
                            <i class="fa-solid fa-plus"></i>{{ __('admin/globale.create') }}
                            {{ __('admin/globale.message') }}
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

                    <main id="messages" class="messages">
                        <div class="container">
                            <div class="title-section"><a href="{{ route('messages.recieved') }}">
                                    {{ __('admin/globale.msgs_recieved') }}
                                </a>
                            </div>
                            <div class="messages-items">
                                <div class="row">
                                    @foreach ($messages as $message)
                                        <div class="col-md-6">
                                            <div class="card info">
                                                <div class="card-header">
                                                    <h6><span class="email">{{ $message->email }}</span><span
                                                            class="name">{{ $message->name }}</span></h6>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{ $message->subject }}</h4>
                                                        <p class="card-text">{{ $message->message }}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        
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
                                                                            href="{{ route('messages.destroy', $message) }}">{{ __('admin/globale.delete') }}</a></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                        <span class="date">
                                                            <?php $date = explode(' ', $message->created_at); ?>
                                                            {{ $date[0] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
