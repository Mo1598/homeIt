@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- < class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-3 p-5">
                <img src="/svg/home_it_2.svg" alt="" style="height: 200px" class="rounded-circle">
            </div>
            <div class="col-9 p-5">
                <div>
                    <h1>{{ $user->username }}</h1>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold"> {{ $user->profile->title }} </div>
                <div>{{ $user->profile->bio }}</div>
                <div><a href="#">{{ $user->profile->url ?? "Coming Soon" }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3fAqoHecdeJesL-c9GQKJkGQskNNufHNrKQ&usqp=CAU" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3fAqoHecdeJesL-c9GQKJkGQskNNufHNrKQ&usqp=CAU" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3fAqoHecdeJesL-c9GQKJkGQskNNufHNrKQ&usqp=CAU" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-between p-5">
                    <a href="" class="pl-5 pt-5"> 
                        <span style="font-size: 100px; color: rgb(173, 182, 182);">
                             <i class="fas fa-plus-circle"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
