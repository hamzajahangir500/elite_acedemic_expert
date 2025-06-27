<div class="form-group row">
    <div class="col-12 col-md-3 col-lg-3">
        <label class="form-control-label text-md-right label-title">Image</label>
    </div>
    <div class="col-12 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-body">
                <label for="myFile" class="custom-file-button" id="choose-file">Choose a file</label>
                <!-- If $author exists, show current image -->
                @if(@$author && $author->image)
                    <div>
                        <img src="{{ asset('storage/authors/'. $author->image) }}" alt="Author Image" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                    </div>
                    <input type="file" id="myFile" name="image" class="form-control" onchange="displayFileName()" value="{{ $author->image }}">
                @else
                    <input type="file" id="myFile" name="image" class="form-control" onchange="displayFileName()">
                @endif                
                <div id="file-name-display" class="mt-2"></div> <!-- Where the file name will be displayed -->
                <div class="invalid-feedback d-block">
                    {{ $errors->first('image') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-12 col-md-3 col-lg-3">
        <label class="form-control-label text-md-right label-title">{{ __('Name') }}</label>
    </div>
    <div class="col-12 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-body">
                <input type="text" placeholder="{{ __('Name') }}" name="name" class="form-control {{ @$errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', @$author->name) }}" required>
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-12 col-md-3 col-lg-3">
        <label class="form-control-label text-md-right label-title">{{ __('Description') }}</label>
    </div>
    <div class="col-12 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-body">
                <textarea placeholder="{{ __('Description') }}" name="description" class="form-control {{ @$errors->has('description') ? ' is-invalid' : '' }}" required>{{ old('description', @$author->description) }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('description') }}
                </div>
            </div>
        </div>
    </div>
</div>