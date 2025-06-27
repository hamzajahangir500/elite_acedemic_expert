@extends('admin.layout.app')

@push('css')
    <link href="{{ asset('/admin-assets/css/dropzone.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Image --}}
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">Image</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="myFile" class="custom-file-button" id="choose-file">Choose a
                                            file</label>
                                        @if ($user && $user->image)
                                            <div>
                                                <img src="{{ asset('storage/users/'. $user->image) }}" alt="User Image"
                                                    class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                            </div>
                                        @endif
                                        <input type="file" id="myFile" name="image"
                                            class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                            onchange="displayFileName()" accept="image/*">
                                        <div id="file-name-display" class="mt-2"></div>
                                        @if ($errors->has('image'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">{{ __('Name') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="text" name="name" placeholder="{{ __('Name') }}"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            value="{{ old('name', $user->name) }}" required>
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label class="form-control-label text-md-right label-title">{{ __('Email') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="email" name="email" placeholder="{{ __('Email') }}"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            value="{{ old('email', $user->email) }}" disabled>
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- New Password --}}
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="form-control-label text-md-right label-title">{{ __('New Password') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="password" name="password"
                                            placeholder="{{ __('Leave blank to keep current password') }}"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Confirm Password --}}
                        <div class="form-group row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <label
                                    class="form-control-label text-md-right label-title">{{ __('Confirm Password') }}</label>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="password" name="password_confirmation"
                                            placeholder="{{ __('Confirm new password') }}"
                                            class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
                                        @if ($errors->has('password_confirmation'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password_confirmation') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="form-group row mb-4">
                            <div class="text-md-right col-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn-primary btn-submit">
                                    <span>{{ __('Update') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('/admin-assets/js/dropzone.min.js') }}"></script>
    <script>
        function displayFileName() {
            const input = document.getElementById('myFile');
            const display = document.getElementById('file-name-display');

            if (input.files && input.files[0]) {
                display.textContent = 'Selected: ' + input.files[0].name;
            } else {
                display.textContent = '';
            }
        }
    </script>
@endpush
