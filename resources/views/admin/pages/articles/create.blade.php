@extends('admin.layout.app')

@section('article-active')
    active
@endsection

@section('page-title')
    {{ __('Create Article') }}
@endsection

@push('css')
    <style>
        .label-title {
            font-size: 2vh !important;
        }
        .cke_notification.cke_notification_warning{
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" class="needs-validation" action="{{route('admin.articles.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <div class="text-md-right col-12 col-md-12 col-lg-12">
                                <button class="btn btn-primary"><span>{{ __('Add') }}</span></button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">{{ __('Theme') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <select name="theme_id"
                                            class="form-control {{ $errors->has('theme_id') ? ' is-invalid' : '' }}">
                                            @foreach (App\Models\Theme::all() as $theme)
                                                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('theme_id') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">{{ __('Title') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="text" placeholder="{{ __('Title') }}" name="title"
                                            class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                            value="{{ old('title') }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">{{ __('Author') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <select name="author_id"
                                            class="form-control {{ $errors->has('author_id') ? ' is-invalid' : '' }}">
                                            @foreach (App\Models\Author::all() as $author)
                                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('author') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">Image</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-header pb-0 col-12 col-md-9 col-lg-9">
                                        <h6>{{ __('Attachment') }}
                                            <small
                                                class="d-block">({{ __('Upload the banner image of the article.') }})</small>
                                        </h6>
                                    </div>
                                    <div class="card-body pt-0">
                                        <label for="myFile" class="custom-file-button mt-2" id="choose-file">Choose a file</label>
                                        <input type="file" id="myFile" name="image" class="form-control" onchange="displayFileName()">
                                        <div id="file-name-display" class="mt-2"></div> <!-- Where the file name will be displayed -->
                                        <small class="d-block text-danger">
                                            Please upload an image with dimensions <span style="font-weight: bold;">1200x628
                                                pixels</span> to ensure optimal display quality.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">{{ __('Content') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body pt-0">
                                        <textarea name="content" id="editor" rows="10" class="content-editor form-control {{ $errors->has('content') ? ' is-invalid' : '' }}">{{ old('content') }}</textarea>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('content') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="col-form-label form-control-label text-md-right label-title">{{ __('Meta Title') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="text" placeholder="{{ __('Meta Title') }}" name="meta_title"
                                            class="form-control {{ $errors->has('meta_title') ? ' is-invalid' : '' }}"
                                            value="{{ old('meta_title') }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('meta_title') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="col-form-label form-control-label text-md-right label-title">{{ __('Tag') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <select name="tag"
                                            class="form-control {{ $errors->has('tag') ? ' is-invalid' : '' }}"
                                            value="{{ old('tag') }}">
                                            <option value="Planning">Planning</option>
                                            <option value="Motivation">Motivation</option>
                                            <option value="Inspiration">Inspiration</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tag') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="col-form-label form-control-label text-md-right label-title">{{ __('Meta Description') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea name="meta_description" rows="5"
                                            class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}">{{ old('meta_description') }}</textarea>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('meta_description') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="col-form-label form-control-label text-md-right label-title">{{ __('Focus keyphrase') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="text" placeholder="{{ __('Focus keyphrase') }}"
                                            name="focus_keyphrase"
                                            class="form-control {{ $errors->has('focus_keyphrase') ? ' is-invalid' : '' }}"
                                            value="{{ old('focus_keyphrase') }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('focus_keyphrase') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="col-form-label form-control-label text-md-right label-title">{{ __('Schema') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea name="schema" rows="5" class="form-control {{ $errors->has('schema') ? ' is-invalid' : '' }}">{{ old('schema') }}</textarea>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('schema') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="text-md-right col-12 col-md-12 col-lg-12">
                                <button class="btn btn-primary"><span>{{ __('Add') }}</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <!-- A friendly reminder to run on a server, remove this during the integration. -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (document.getElementById("editor")) {
                CKEDITOR.replace("editor");
            }
        });
    </script>
@endpush
