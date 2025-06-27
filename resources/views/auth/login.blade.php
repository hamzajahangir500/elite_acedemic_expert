@extends('home.layouts.auth.auth')
@section('page-title')
    {{ __('Login') }}
@endsection
@section('descriptions')
    <meta name="title" content="Login to Your Elite Academic Account | Academic Writing Services" />
    <meta name="description"
        content="Log in to your Elite Academic account for easy access to top-quality academic writing services tailored to your needs." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ route('login') }}" />
@endsection
@push('css')
    <style>
        .error {
            color: red;
        }
    </style>
@endpush
@section('content')
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="mainsignDiv">
                        <div>
                            <h1 class="sub-heading-24px pb-3 fw-bold text-start">
                                Customer Login
                            </h1>
                            <p class="smallPara text-black-50">If you already have an account sign in with your email address</p>
                        </div>
                        <div class="formDIv">
                            <form id="loginForm" method="POST" action="{{route('login.user')}}">
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
                                <div class="row">
                                    <div class="col-12">
                                        <label for="password" class="labelTitle pb-2">Password*</label>
                                        <div class="inputField">

                                            <span class="iconsInput"><i class="fas fa-lock iconcolor"></i></span>
                                            <span class="w-100">
                                                <input type="password"
                                                    class="form-control inputcus {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                    placeholder="Password" id="password" required name="password"
                                                    value="{{ old('password') }}">
                                            </span>
                                            <span class="iconsInput2"><i class="fas fa-eye iconcolor"></i></span>
                                        </div>
                                        <div class="invalid-feedback d-block mb-4">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label smallDes" for="exampleCheck1">Remember
                                            me</label>
                                    </div>
                                    <div class="col-6 text-lg-end">
                                        <a href="{{ route('forget.password') }}" class="forgottext">Forgot password?</a>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="mb-4 text-lg-center">
                                            <button type="submit" class=" btnGreen w-50 text-decoration-none">Sign
                                                in</button>
                                            <!--<button class="btnGreen w-50">Sign in</button>-->
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-6 text-lg-end">
                                        <a href="javascript:void(0)" class="labelTitle text-decoration-none">Not registered
                                            yet?</a>
                                    </div>
                                    <div class="col-6 text-lg-start">
                                        <a href="{{route('register')}}" class="forgottext">Create an account</a>
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
    </section>
@endsection
