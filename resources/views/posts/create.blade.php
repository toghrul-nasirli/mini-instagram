@extends('layouts.app')

@section('content')
<div class="container pr-5 pl-5">
    <form action="/p" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label font-weight-bold">Post Caption</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label font-weight-bold">Post Image</label>
                    <input class="form-control-file" type="file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary">Add Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection