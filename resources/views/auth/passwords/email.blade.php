@extends('home.layouts.auth.auth')
@section('page-title'){{ __('Reset Password') }}@endsection

@section('descriptions')
    <meta name="title" content="Reset Your Password | Essay Pacer Account Access"/>
    <meta name="description" content="Lost your password? Reset it quickly and regain access to your Essay Pacer account to continue your academic writing journey."/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{route('forget.password')}}"/>
@endsection

@section('content')
    <section class="howToGetPerfectPaperSection ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center ">
                    <div class="mainsignDiv">

                        <div>
                            <h1 class="sub-heading-24px pb-3 fw-bold  text-start">
                                Reset Password
                            </h1>

                        </div>
                        <!--<div class="py-4">-->
                        <!--    <button class="googlebtn me-4"><img src="img/Essaypacer-Assets/search.svg" width="25"-->
                        <!--            class="img-fluid pe-3">sign in with google</button>-->
                        <!--    <button class="googlebtn "><img src="img/Essaypacer-Assets/apple.svg" width="25"-->
                        <!--            class="img-fluid pe-3">sign in with apple</button>-->
                        <!--</div>-->
                        <!--<p class="smallPara text-center text-black-50 ">Or sign with</p>-->

                        <div class="formDIv">
                            <form id="PasswordResetForm" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                @if (session()->has('info'))
                                    <div class="alert alert-success">
                                        {{ session()->get('info') }}
                                    </div>
                                @endif
                                @if (session()->has('status'))
                                    <div class="alert alert-info">
                                        {{ session()->get('status') }}
                                    </div>
                                @endif
                                <div class="row">


                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="email" class="labelTitle pb-2">Email address*</label>
                                        <div class="inputField">
                                            <span class="iconsInput"><i class="far fa-user iconcolor"></i></span>
                                            <span class="w-100">
                                            <input type="email"
                                                   class="form-control inputcus {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                   placeholder="Your email" id="email" name="email"
                                                   value="{{ old('email') }}" required>
                                                </span>
                                        </div>
                                        <div class="invalid-feedback d-block mb-4">
                                            {{ $errors->first('email') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="mb-4 text-lg-center">
                                            <button type="submit" class=" btnGreen w-50 text-decoration-none">Reset Password</button>
                                            <!--<button class="btnGreen w-50">Sign in</button>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6 text-lg-end">
                                        <a href="{{route('register')}}" class="labelTitle text-decoration-none">Not registered yet?</a>

                                    </div>
                                    <div class="col-6 text-lg-start">
                                        <a href="{{route('login')}}" class="forgottext">Login</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6  d-flex align-items-center justify-content-center ">
                    <img class="w-100 order-complete" src="{{asset('images/left.svg')}}" alt="order-complete" loading="lazy">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <style>
        .error {
            color: red;
        }
    </style>
@endpush
