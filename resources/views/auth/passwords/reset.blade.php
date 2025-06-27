@extends('home.layouts.auth.auth')
@section('page-title'){{ __('Set a New Password') }}@endsection

@section('content')
    <section class="howToGetPerfectPaperSection ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center ">
                    <div class="mainsignDiv">

                        <div>
                            <h1 class="sub-heading-24px pb-3 fw-bold  text-start">
                                Setup a new password
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
                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                </div>
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


                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="mb-4 text-lg-center">
                                            <button type="submit" class=" btnGreen w-50 text-decoration-none ">Confirm password</button>
                                            <!--<button class="btnGreen w-50">Create account</button>-->

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6  d-flex align-items-center justify-content-center ">
                    <div class="steperMainDIv">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('auth-assets/images/Group 21963.svg')}}" width="240" class="img-fluid" alt="image"/>
                        </div>
                        <!-- completed -->
                        <div class="step completed">
                            <div class="v-stepper">
                                <div class="circle d-flex align-items-center justify-content-center">01</div>
                                <div class="line"></div>
                            </div>

                            <div class="content">
                                <p class="sub-heading text-white text-start">
                                    Make an Order
                                </p>
                                <p class="smallDes text-white">Fill out the easy-in-use order form specifying paper
                                    details.</p>
                            </div>
                        </div>
                        <div class="step completed">
                            <div class="v-stepper">
                                <div class="circle d-flex align-items-center justify-content-center">02</div>
                                <div class="line"></div>
                            </div>

                            <div class="content">
                                <p class="sub-heading text-white text-start">
                                    Get the Best Expert
                                </p>
                                <p class="smallDes text-white">We assign the most qualified writer to work on your
                                    paper
                                    depending on your preferences..</p>
                            </div>
                        </div>
                        <div class="step completed">
                            <div class="v-stepper">
                                <div class="circle d-flex align-items-center justify-content-center">03</div>
                                <div class="line"></div>
                            </div>

                            <div class="content">
                                <p class="sub-heading text-white text-start">
                                    Proceed with Payment
                                </p>
                                <p class="smallDes text-white">Pay without risk using secure payment methods: Visa
                                    or
                                    MasterCard.</p>
                            </div>
                        </div>
                        <div class="step completed">
                            <div class="v-stepper">
                                <div class="circle d-flex align-items-center justify-content-center">04</div>
                                <div class="line"></div>
                            </div>

                            <div class="content">
                                <p class="sub-heading text-white text-start">
                                    Track Order Progress
                                </p>
                                <p class="smallDes text-white">Message your support agent to chat with the assigned
                                    writer and control process in real time.</p>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush
@push('css')

@endpush
