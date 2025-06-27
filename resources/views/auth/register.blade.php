@extends('home.layouts.auth.auth')
@section('page-title')
    {{ __('Register') }}
@endsection

@section('descriptions')
    <meta name="title" content="Sign Up with Elite Academic Expert | Access UK's Top Writing Services"/>
    <meta name="description" content="Register now to get started with Elite Academic Expert's expert academic writing services. Easy sign-up and personalized writing solutions await."/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{route('register')}}"/>
@endsection

@section('content')
    <section class="howToGetPerfectPaperSection ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center ">
                    <div class="mainsignDiv">

                        <div>
                            <h1 class="sub-heading-24px pb-3 fw-bold  text-start">
                                Customer registration
                            </h1>
                            <p class="smallPara text-black-50">If you already have an account sign in with your
                                email
                                address</p>

                        </div>
                        <!--<div class="py-4">-->
                        <!--    <button class="googlebtn me-4"><img src="img/Essaypacer-Assets/search.svg" width="25"-->
                        <!--            class="img-fluid pe-3">sign in with google</button>-->
                        <!--    <button class="googlebtn "><img src="img/Essaypacer-Assets/apple.svg" width="25"-->
                        <!--            class="img-fluid pe-3">sign in with apple</button>-->
                        <!--</div>-->
                        <!--<p class="smallPara text-center text-black-50 ">Or sign with</p>-->

                        <div class="formDIv">
                            <form id="signupForm" method="post" action="{{ route('register.user') }}">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label for="email" class="labelTitle pb-2">Email address*</label>
                                        <div class="inputField">

                                            <span class="iconsInput"><i class="far fa-user iconcolor"></i></span>
                                            <span class="w-100">
                                                <input type="email" class="form-control inputcus {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   placeholder="Your email" id="email" value="{{ old('email') }}" name="email" required autofocus>
                                            </span>
                                        </div>
                                        <div class="invalid-feedback d-block">
                                            {{ $errors->first('email') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label for="password" class="labelTitle pb-2">Password*</label>
                                        <div class="inputField">
                                            <span class="iconsInput"><i class="fas fa-lock iconcolor"></i></span>
                                            <span class="w-100">
                                                <input type="password" class="form-control inputcus {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                   placeholder="Password" id="password" name="password" value="{{ old('password') }}" autocomplete="new-password" required>
                                            </span>
                                            <span class="iconsInput2"><i class="fas fa-eye iconcolor"></i></span>
                                        </div>
                                        <div class="invalid-feedback d-block">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="password_confirmation" class="labelTitle pb-2">Confirm Password</label>

                                            <input type="password" name="password_confirmation" autocomplete="new-password"
                                                   class="form-control inputcus px-4 {{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
                                                   id="password_confirmation" placeholder="Confirm password" required>
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('password_confirmation') }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="name" class="labelTitle pb-2">Name*</label>
                                        <div class="mb-4 ">
                                            <input type="text" class="form-control inputcus px-4 {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   placeholder="Full name" required
                                             name="name" id="name" value="{{ old('name') }}">
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('name') }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <input type="checkbox" class="form-check-input" required id="terms">
                                        <label class="form-check-label smallDes" for="terms">If you agree our terms and condtions</label>
                                    </div>
                                    <!--<div class="col-12 ">-->
                                    <!--    <input type="checkbox" class="form-check-input" id="exampleCheck11">-->
                                    <!--    <label class="form-check-label smallDes" for="exampleCheck11">Remembere-->
                                    <!--        me</label>-->
                                    <!--</div>-->

                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="mb-4 text-lg-center">
                                            <button type="submit" class=" btnGreen w-50 text-decoration-none ">Create account</button>
                                            <!--<button class="btnGreen w-50">Create account</button>-->

                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-6 text-lg-end">
                                        <a href="javascript:void(0)" class="labelTitle text-decoration-none">Are you registered ?</a>

                                    </div>
                                    <div class="col-6 text-lg-start">
                                        <a href="{{route('login')}}" class="forgottext">Go back to Sign in</a>
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
