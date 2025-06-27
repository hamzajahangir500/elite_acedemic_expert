@extends('admin.layout.app')

@section('page-title')
    {{ __('Create Author') }}
@endsection
@push('css-page')
    <link rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}" type="text/css"/>
@endpush
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" class="needs-validation" action="{{route('admin.authors.update', ['author' => @$author->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('admin.pages.author.form.author_form')
                        <div class="form-group row mb-4">
                            <div class="text-md-right col-12 col-md-12 col-lg-12">
                                <button class="btn btn-primary btn-submit"><span>{{ __('Update') }}</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
