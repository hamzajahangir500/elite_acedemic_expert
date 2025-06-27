@extends('admin.layout.app')
@section('author-active')
    active
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Authors</h6>
            <a href="{{route('admin.authors.create')}}" class="btn btn-primary">{{ __('Add') }}</a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Image') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Number of Articles') }}</th>
                            <th scope="col">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$authors as $author)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img class="lazyload"
                                        src="{{ asset('storage/authors/'. $author->image) }}"
                                        alt="Author Image" width="50" height="50">
                                </td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->articles_count }}</td>
                                <td>
                                    <a href="{{ route('admin.authors.edit', $author->id) }}" class="edit-icon"
                                        title="{{ __('Edit') }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    {{-- <a href="#" class="delete-icon" title="{{ __('Delete') }}" data-confirm="{{ __('Are You Sure?').'|'.__('This action can not be undone. Do you want to continue?') }}" data-confirm-yes="document.getElementById('delete-form-{{$author->id}}').submit();">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $author->id }}" action="{{ route('admin.authors.destroy', $author->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection