@extends('admin.layout.app')

@section('article-active')
    active
@endsection

@push('css')
    <style>
        .delete-icon,
        .form-check-input {
            margin-right: 10px; /* Adds some space between delete icon and toggle */
        }
        td.text-center {
            text-align: center; /* Center horizontally */
            vertical-align: middle; /* Center vertically */
        }

        .form-check-input {
            margin: 0 auto; /* Ensures the toggle is horizontally centered */
            display: block; /* Ensures that the margin auto works */
        }
    </style>
@endpush
@section('page-title')
    {{ __('Manage Articles') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card o-hidden mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
                    <a href="{{route('admin.articles.create')}}" class="btn btn-primary">{{ __('Add') }}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Image') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Theme') }}</th>
                                <th scope="col">{{ __('Tag') }}</th>
                                <th scope="col">{{ __('Created At') }}</th>
                                <th scope="col">{{ __('Action') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $index => $article)
                                    @php
                                        $tagName = 'N/A';
                                        if($article->tag == 'Planning'){
                                            $tagName = 'Planning';
                                        } elseif ($article->tag == 'Motivation') {
                                            $tagName = 'Motivation';
                                        } elseif ($article->tag == 'Inspiration') {
                                            $tagName = 'Inspiration';
                                        }
                                    @endphp
                                    <tr>
                                        <th scope="row">{{++$index}}</th>
                                        <td>
                                            <img src="{{ asset('storage/articles/'. $article->image) }}" width="50" alt="image"/>
                                        </td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->theme ? $article->theme->name : 'N/A'}}</td>
                                        <td>{{$tagName}}</td>
                                        <td>{{$article->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="edit-icon" title="{{ __('Edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="delete-icon" title="{{ __('Delete') }}" data-confirm="{{ __('Are You Sure?').'|'.__('This action can not be undone. Do you want to continue?') }}" data-confirm-yes="document.getElementById('delete-form-{{$article->id}}').submit();"><i class="fas fa-trash"></i></a>
                                            <form id="delete-form-{{ $article->id }}" action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <td class="text-center">
                                                <!-- Toggle Button -->
                                                <input class="article-status" type="checkbox" role="switch" id="flexSwitchCheckChecked{{$article->id}}" {{$article->status == 1 ? 'checked' : ''}} data-article-id = {{@$article->id}} data-article-title = "{{@$article->title}}"> 
                                            </td>
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

@push('script')
    <script>
        $('.article-status').on('click', function() {
            var articleId = $(this).data('article-id');
            var articleTitle = $(this).data('article-title');
            var status = $(this).prop('checked') ? 1 : 0; // 1 if checked, 0 otherwise

            var updateUrl = `{{ route('admin.articles.update', ['article' => '__ARTICLE_ID__']) }}`.replace('__ARTICLE_ID__', articleId);
            // Send an AJAX request to the resource controller
            $.ajax({
                url: updateUrl, // Resource route for updating
                method: 'PUT', // Use PUT as it's updating an existing resource
                data: {
                    id: articleId,
                    status: status,
                    title: articleTitle,
                    _token: $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr) {
                    location.reload();
                }
            });
        });
    </script>
@endpush
