@extends('pages.admin.layouts._master')
@section('content')
    <div class="page" id="page">
        <div class=new-admin id="new-admin">
            <div class="page-top">
                <div class="title">{{ __('admin/globale.create') }} {{ __('admin/globale.post') }}</div>
                <div class="other-page">
                    <a href="{{ route('posts.index') }}">
                        <span>
                            <i class="fa-solid fa-list-check"></i>{{ __('admin/globale.all_posts') }}
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
                    <form class="form" action="{{ route('posts.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="section">
                            <div class="title">{{ __('admin/globale.thumbnail') }}</div>
                        </div>
                        <div class="logo">
                            <label htmlFor="thumbnail">{{ __('admin/globale.upload') }}
                                <i class="fas fa-cloud-upload"></i>
                                <input type="file" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') }}" />
                            </label>
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>
                            @endif
                        </div>
                        <div class="section">
                            <div class="title">{{ __('admin/globale.post_info') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="title">{{ __('admin/globale.title') }}</label>
                                    <input type="text" name="title" id="title" value="{{ old('title') }}" />
                                    @if ($errors->has('title'))
                                        <span class="help-block">{!! $errors->first('title') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="content">{{ __('admin/globale.content') }}</label>
                                    <textarea name="content" id="editor" rows="12">{{ old('content') }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block">{!! $errors->first('content') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="field">
                                    <label htmlFor="category_id">{{ __('admin/globale.category') }}</label>
                                    <select id="category_id" name="category_id">
                                        @if ($categories && $categories->count() > 0)
                                            <option value="" selected disabled>{{ __('admin/globale.choose_category') }}
                                            </option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="help-block">{!! $errors->first('category_id') !!}</span>
                                    @endif
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

@section('javascript')
    <script src="{{ asset('vendor/Cckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language:'ar',
                style:true,
                ckfinder: {
                    // Upload the images to the server using the CKFinder QuickUpload command.
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                },

            })
            .then()
            .catch(error => {
                console.log(error);
            });
    </script>
@endsection
