@extends('pages.admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">Toutes les catégories</div>
                <div class="other-page">
                    <a href="{{ route('categories.create') }}">
                        <span>
                            <i class="fa-solid fa-plus"></i>Ajouter une catégorie
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

                    @include('pages.admin.includes.alerts.success')
                    @include('pages.admin.includes.alerts.errors')

                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <table id="categories" class="table display nowrap table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Categories() !== null)
                                        @foreach (Categories() as $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <a href="{{ route('categories.edit', $category) }}"
                                                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Modifier</a>
                                                        <a onclick="document.getElementById('id01').style.display='block'"
                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimé</a>
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
                                                                            href="{{ route('categories.destroy', $category) }}">{{ __('admin/globale.delete') }}</a></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@include('pages.admin.includes._dataTable')
