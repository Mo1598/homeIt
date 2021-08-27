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
                    <h1>Home It</h1>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold"> homeit.com </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at fermentum lectus, at imperdiet massa.
                    Cras condimentum lobortis metus, vel egestas nisi dignissim at. Sed accumsan metus ut est finibus
                    iaculis. Suspendisse sed felis mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                </div>
                <div><a href="#">www.homeit.com</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3fAqoHecdeJesL-c9GQKJkGQskNNufHNrKQ&usqp=CAU" alt="">
            </div>
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3fAqoHecdeJesL-c9GQKJkGQskNNufHNrKQ&usqp=CAU" alt="">
            </div>
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3fAqoHecdeJesL-c9GQKJkGQskNNufHNrKQ&usqp=CAU" alt="">
            </div>
        </div>
    </div>
@endsection
