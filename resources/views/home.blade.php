@extends('layouts.app')

@section('content')
<div class="container py-4">
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
</div>
<h1 class="text-center"><b>Daily</b>Trends</h1>

<section class="bg-warning">
    <div class="container py-5">
        <h2><b>Nuestros Artículos</b></h2>
        <hr class="border-dark">

        <div id="feed-list" class="feed-list pl-0 d-flex">
            @foreach($feeds as $feed)
                <div class="feed-item col-lg-4 my-4">
                    <div class="cover-image overflow-hidden">
                        @if(Storage::disk('images')->has($feed->image))
                            <img src="{{url('miniatura/'.$feed->image)}}" alt="{{$feed->title}}" class="rounded-top d-block m-auto w-100">
                        @endif
                    </div>
                    <div class="data bg-white py-4 px-4 shadow rounded-bottom">
                        <h4>{{$feed->title}}</h4>
                        <p class="mb-0">{{$feed->user->name}}</p>
                        <br>
                    </div>     
                </div>
            @endforeach
        </div>
        <div class="container">
        {{$feeds->links()}}
        </div>
    </div>

</section>
@endsection
