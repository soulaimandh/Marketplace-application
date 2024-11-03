@extends('pages.admin.layouts._master')
@section('content')
    <div class="profile">
        <div class="profile-header">
            <div class="cover">
                <div class="avatar">
                    <img src="{{ asset('/assets/images/client/avatar.png') }}" alt="">
                </div>
                <a class="edit" href=""><i class="fas fa-edit"></i></a>
            </div>

            <div class="name">
                {{Auth::user()->name}}
            </div>
            <div class="registred-date">
                @php $date = explode(' ',Auth::user()->created_at) @endphp
                Registered at {{$date[0]}}
            </div>
        </div>
    </div>
@endsection
