@extends('layouts.app')

@section('content')

<section class="bg-warning py-5">
    <div class="container">
        <h2><b>Artículos con la palabra: {{$search}}</b></h2>
        <hr class="border-dark">
    </div>

        <div id="feed-list" class="feed-list d-block m-auto" style="max-width: 90%">
            @if(count($results) >= 1)
                @foreach($results as $result)
                    <div class="feed-item col-lg-4 my-4">
                        <div class="cover-image overflow-hidden">
                            @if(Storage::disk('images')->has($result->image))
                                <img src="{{url('miniatura/'.$result->image)}}" alt="{{$result->title}}" class="rounded-top d-block m-auto w-100">
                            @endif
                        </div>
                        <div class="data d-block m-auto bg-white py-4 px-4 shadow rounded-bottom">
                            <h4>{{$result->title}}</h4>
                            <p class="mb-2">{{$result->user->name}}</p>
                            <a class="d-block text-dark" href="{{route('articleDetail', ['feedId' => $result->id])}}">Leer artículo completo <i class="far fa-arrow-right"></i></a>
                            <br>

                        <!-- Botones de eliminar y editar -->
                        @if(Auth::check() && Auth::user()->id == $result->user->id)
                            <a href="{{url('/editar-articulo/'.$result->id)}}" class="btn btn-warning">Editar</a>
                            <a href="{{url('/borrar-articulo/'.$result->id)}}" class="btn btn-danger">Borrar</a>
                        @endif
                        </div>     
                    </div>
                @endforeach
            
            <div>
            {{$results->links()}}  
            </div>
            @else
                <p class="w-100 text-center">
                    No hay artículos con ese título
                </p>
                
            @endif
        </div>
        


</section>
@endsection