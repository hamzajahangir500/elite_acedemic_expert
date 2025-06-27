@extends('home.layouts.app')
@section('title')
    <title>My Account</title>
@endsection

@section('section')
    <div class="main-content mt-3">
        <div class="main-container">
            <section class="hero-section">
                <div class="container-fluid">
                    <div class="row">
                        <form method="post" action="{{route('user.account.update', $user->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="col-form-label form-control-label text-md-right col-12 col-md-3 col-lg-3">
                                </label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="form-group col-lg-12 col-md-12 d-flex">
                                        <img height="150" src="{{ asset('storage/users/'. $user->image) }}" id="myAvatar" alt="user-image" class="rounded-circle">
                                        <div class="choose-file form-group ml-3 mb-0">
                                            <p class="avatar_selection"></p>
                                            <label for="file" class="form-control-label mb-0">
                                                <div class="input-group mb-3">
                
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input {{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" id="file" data-filename="avatar_selection">
                                                        <label class="custom-file-label" for="file">Change avatar image</label>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('avatar') }}
                                                </div>
                                            </label>
                                            <label class="form-control-label">{{ __('Please upload a valid image file. Size of image should not be more than 2MB.') }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label form-control-label  text-md-right col-12 col-md-3 col-lg-3">{{ __('Name') }}</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" placeholder="{{ __('Full name of the user') }}" name="name" class="form-control h-auto px-2 {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $user->name }}" autofocus>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label form-control-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Email') }}</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="email" disabled placeholder="{{ __('Email address (should be unique)') }}" class="form-control h-auto px-2 {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $user->email }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group row mb-4">
                                <label class="col-form-label form-control-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Password') }}</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="password" name="password" autocomplete="new-password" placeholder="{{ __('Set an account password') }}" class="form-control  h-auto px-2 {{ $errors->has('password') ? ' is-invalid': '' }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label form-control-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Confirm Password') }}</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="password" name="password_confirmation" placeholder="{{ __('Confirm account password') }}" autocomplete="new-password" class="form-control  h-auto px-2 {{ $errors->has('password_confirmation') ? ' is-invalid': '' }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="profile" value="user">
                            <div class="form-group row mb-4">
                                <label class="col-form-label form-control-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn-submit btn-primary btn"><span>{{ __('Update') }}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection