@extends('layouts.app')

@section('content')
<div class="container py-4">
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
</div>
<h1 class="text-center mb-5"><b>Daily</b>Trends</h1>

@include('articles.feed')
@include('scraping.news')
@endsection
