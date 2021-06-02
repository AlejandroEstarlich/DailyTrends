@extends('layouts.app')

@section('content')
<section class="bg-warning bg-main py-4">
    <div class="container py-3 text-center">
        <h2>{{$detail->title}}</h2>
        <p>{{$detail->user->name}}</p>
    </div>
</section>
<section class="article-content container py-3">
    <div class="article-image text-center">
        @if(Storage::disk('images')->has($detail->image))
            <img src="{{url('miniatura/'.$detail->image)}}" alt="{{$detail->title}}" class="shadow rounded">
        @endif
    </div>
    <div class="article-text py-5">
        <p>{{$detail->body}}</p>
    </div>
</section>
@endsection
