@extends('admin.layout.app')
@section('customer-active')
    active
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('admin.customers.store') }}" enctype="multipart/form-data" class="mb-4">
                @csrf
                <div class="form-row justify-content-center">
                    <div class="col-md-3">
                        <input type="hidden" name="id" value="{{ @$customer->id ?? '' }}">
                        <input type="text" name="name" value="{{ @$customer->name }}"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Customer Name"
                            required>
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="col-md-3">
                        <input type="email" name="email" value="{{ @$customer->email }}"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                            placeholder="Customer Email" required>
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="image"
                            class="form-control-file {{ $errors->has('image') ? 'is-invalid' : '' }}">
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success">
                            {{ isset($customer) && $customer->id ? __('Update Customer') : __('Add Customer') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="table-responsive mt-3">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Image') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Email') }}</th>
                            <th scope="col">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$customers as $customer)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @php
                                        $imagePath = 'users/' . $customer->image;
                                    @endphp

                                    <img src="{{ $customer->image && Storage::disk('public')->exists($imagePath) ? asset('storage/' . $imagePath) : asset('admin-assets/img/undraw_profile.svg') }}"
                                        alt="Customer Image" width="50" height="50">
                                </td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <a href="{{ route('admin.customers.edit', $customer->id) }}" class="edit-icon"
                                        title="{{ __('Edit') }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
