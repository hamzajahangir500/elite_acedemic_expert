@extends('admin.layout.app')
@section('orders-active')
    active
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Order Details</h6>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Email') }}</th>
                            <th scope="col">{{ __('Phone') }}</th>
                            <th scope="col">{{ __('Type of Paper') }}</th>
                            <th scope="col">{{ __('Descipline') }}</th>
                            <th scope="col">{{ __('Academic Level') }}</th>
                            <th scope="col">{{ __('Duration') }}</th>
                            <th scope="col">{{ __('Spacing') }}</th>
                            <th scope="col">{{ __('Paper Title') }}</th>
                            <th scope="col">{{ __('Paper Details') }}</th>
                            <th scope="col">{{ __('Pages') }}</th>
                            <th scope="col">{{ __('Citations') }}</th>
                            <th scope="col">{{ __('Format') }}</th>
                            <th scope="col">{{ __('Writer Preference') }}</th>
                            <th scope="col">{{ __('Total Price') }}</th>
                            <th scope="col">{{ __('Attachment') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->type_of_paper }}</td>
                                <td>{{ $order->discipline }}</td>
                                <td>{{ $order->academic_level }}</td>
                                <td>{{ $order->urgency }}</td>
                                <td>{{ $order->spacing }}</td>
                                <td>{{ $order->paper_title ?? 'N/A'}}</td>
                                <td>{{ $order->paper_details ?? 'N/A'}}</td>
                                <td>{{ $order->pages }}</td>
                                <td>{{ $order->sources }}</td>
                                <td>{{ $order->format }}</td>
                                <td>{{ $order->writer_preference }}</td>
                                <td>£ {{ $order->total_price }}</td>
                                <td>
                                    @if($order->attachement)
                                        <a class="btn btn-primary" target="__blank" href="{{asset('storage/attachments/'. $order->attachement)}}">View</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection