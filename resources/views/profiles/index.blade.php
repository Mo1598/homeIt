@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle w-100">
            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>

                    @can('update', $user->profile)
                        <div class="dropdown">
                        <button class="btn btn-light" style="background-color: white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/profile/{{ $user->id }}/edit">Edit Profile</a></li>
                        </ul>
                        </div>
                    @endcan
                    
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold"> {{ $user->profile->title }} </div>
                <div>{{ $user->profile->bio }}</div>
                <div><a href="#">{{ $user->profile->url ?? "Coming Soon" }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ( $user->posts as $post )

            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </a>
            </div>
           
            @endforeach
            
            @can('update', $user->profile)
            <div class="col-4">
                <div class="d-flex justify-content-between p-5">
                    <a href="/p/create" class="pl-4 pt-2"> 
                        <span style="font-size: 100px; color: rgb(187, 194, 194);">
                             <i class="fas fa-plus-circle"></i>
                        </span>
                    </a>
                </div>
            </div>
            @endcan
        </div>
    </div>
@endsection
