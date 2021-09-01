@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/svg/home_it_2.svg" alt="" style="height: 200px" class="rounded-circle">
            </div>
            <div class="col-9 p-5">
                <div>
                    <h1>{{ $user->username }}</h1>
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

            <div class="col-4 pb-1">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </a>
            </div>
           
            @endforeach
            
            <div class="col-4">
                <div class="d-flex justify-content-between p-5">
                    <a href="/p/create" class="pl-4 pt-2"> 
                        <span style="font-size: 100px; color: rgb(187, 194, 194);">
                             <i class="fas fa-plus-circle"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
