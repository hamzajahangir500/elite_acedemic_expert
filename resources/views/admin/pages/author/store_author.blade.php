@extends('admin.layout.app')
@section('author-active')
    active
@endsection
@push('css')
    <!-- DropZone CSS -->
    <link href="{{ asset('/admin-assets/css/dropzone.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Add Author</h6>
                </div>
                <div class="card-body">
                    <form method="post" class="needs-validation" action="{{ route('admin.authors.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @include('admin.pages.author.form.author_form')
                        <div class="form-group row mb-4">
                            <div class="text-md-right col-12 col-md-12 col-lg-12">
                                <button class="btn btn-primary btn-submit"><span>{{ __('Add') }}</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- Page level plugins -->
    <script src="{{ asset('/admin-assets/js/dropzone.min.js') }}"></script>
@endpush
