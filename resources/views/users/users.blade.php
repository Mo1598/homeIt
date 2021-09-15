@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-4">
            @foreach ($profile as $post)
              <div class="col-3 pb-4">
                  <a href="/profile/{{ $post->user->id }}">
                     <img src="/storage/{{$post->image}}" alt="" class="w-100 rounded-circle">
                 </a>
              </div>
            @endforeach
        </div>
    </div>
@endsection
