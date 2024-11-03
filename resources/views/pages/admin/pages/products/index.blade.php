@extends('pages.admin.layouts._master')

@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{ __('admin/globale.all_posts') }}</div>
                <div class="other-page">
                    <a href="{{ route('posts.create') }}">
                        <span>
                            <i class="fa-solid fa-plus"></i>{{ __('admin/globale.create') }}{{ __('admin/globale.post') }}
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
                            <table class="table display nowrap table-striped table-bordered " id="posts">

                                <thead class="">
                                    <tr>
                                        <th>{{ __('admin/globale.thumbnail') }}</th>
                                        <th>{{ __('admin/globale.title') }}</th>
                                        <th>{{ __('admin/globale.price') }}</th>
                                        <th>{{ __('admin/globale.category') }}</th>
                                        <th>{{ __('admin/globale.status') }}</th>
                                        <th>{{ __('admin/globale.quantity') }}</th>
                                        <th>{{ __('admin/globale.end_date') }}</th>
                                        <th>{{ __('admin/globale.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @isset($products)
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><img style="width: 150px; height: 100px;"
                                                        src="{{ $product->thumbnail() }}"></td>

                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    {{ $product->category->title }}
                                                </td>
                                                <td> {{ $product->getActive() }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                {{-- <td>{{$product->startsAt}}</td> --}}
                                                <td>{{ $product->endsAt }}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ __('admin/globale.edit') }}</a>


                                                        <a href="{{ route('products.destroy', $product->id) }}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ __('admin/globale.delete') }}</a>

                                                        <a href="{{ route('products.status', $product->id) }}"
                                                            class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                            {{ $product->getActive() }}
                                                        </a>

                                                    </div>
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
@endsection

@include('pages.admin.includes._dataTable')
