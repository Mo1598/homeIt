@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h3>
                            Edit Profile
                        </h3>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label"> Title</label>

                            <input id="title" type="text" name="title" 
                            class="form-control @error('title') is-invalid @enderror" 
                            value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group row">
                        <label for="bio" class="col-md-4 col-form-label"> Bio </label>

                            <input id="bio" type="text" name="bio" 
                            class="form-control @error('bio') is-invalid @enderror" 
                            value="{{ old('bio') ?? $user->profile->bio }}" required autocomplete="bio" autofocus>

                            @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label"> URL </label>

                            <input id="url" type="text" name="url" 
                            class="form-control @error('url') is-invalid @enderror" 
                            value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                        <input type="file" class="form-control-file" id="image" name="image" >

                        @error('image')
                                    <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
