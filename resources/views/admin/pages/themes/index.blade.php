@extends('admin.layout.app')
@section('theme-active')
    active
@endsection
<style>
    /* Style for odd rows */
    table tbody tr:nth-child(odd) {
        background-color: #f8f9fa; /* Light grey color, you can customize this */
    }
</style>
@section('page-title')
    {{ __('Theme') }}
@endsection

@push('css-page')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
@endpush

<style>
    .label-title {
        font-size: 2vh !important;
    }
</style>

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Themes</h6>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
                <form method="post" class="needs-validation" action="{{route('admin.themes.store')}}">
                    @csrf
                    <div class="form-group row justify-content-center">
                        <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center justify-content-center">
                            <input type="text" 
                                   placeholder="{{ __('Add Theme Name') }}" 
                                   name="name" 
                                   class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                   value="{{ @$theme->name }}" 
                                   required>
                            <input type="hidden" name="id" value="{{@$theme->id}}">
                            <button class="btn btn-primary btn-submit ml-3"><span>{{ __('Save') }}</span></button>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    </div>                    
                </form>
                <div class="row">
                    <div class="text-md-center col-12 col-md-12 col-lg-12 ">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="font-weight: bold; color: black; font-size: 14px;">Sr #</th>
                                    <th style="font-weight: bold; color: black; font-size: 14px;">Name</th>
                                    <th style="font-weight: bold; color: black; font-size: 14px;">Action</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                @foreach (@$themes as $theme)
                                    <tr style="color:black">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$theme->name}}</td>
                                        <td>
                                            <a href="{{ route('admin.themes.edit', $theme->id) }}" class="btn-submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Theme">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14s" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                                                </svg>
                                            </a>                                                                              
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection