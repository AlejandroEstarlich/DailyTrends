@extends('layouts.app')

@section('content')

<section class="bg-warning py-5">
    <div class="container">
        <h2><b>Artículos con la palabra: {{$search}}</b></h2>
        <hr class="border-dark">
    </div>
</section>
<section class="py-5">
    <div id="feed-list" class="feed-list d-block d-flex flex-wrap m-auto" style="max-width: 90%">
        @if(count($feeds) >= 1)
            @foreach($feeds as $feed)
                <div class="feed-item col-lg-4 my-4">
                    <div class="cover-image overflow-hidden" style="max-height: 200px;">
                        @if(Storage::disk('images')->has($feed->image))
                            <img src="{{url('miniatura/'.$feed->image)}}" alt="{{$feed->title}}" class="rounded-top d-block m-auto w-100">
                        @endif
                    </div>
                    <div class="data d-block m-auto bg-white py-4 px-4 shadow rounded-bottom">
                        <h4>{{$feed->title}}</h4>
                        <p class="mb-2">{{$feed->user->name}}</p>
                        <a class="d-block text-dark" href="{{route('articleDetail', ['feedId' => $feed->id])}}">Leer artículo completo <i class="far fa-arrow-right"></i></a>
                        <br>

                    <!-- Botones de eliminar y editar -->
                    @if(Auth::check() && Auth::user()->id == $feed->user->id || Auth::check() && Auth::user()->role == 'admin')
                        <a href="{{url('/editar-articulo/'.$feed->id)}}" class="btn btn-warning">Editar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrar{{$feed->id}}">Borrar</a>

                        <div class="modal fade" id="borrar{{$feed->id}}" tabindex="-1" aria-labelledby="borrarLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="borrarLabel">Eliminar: {{$feed->title}}</h5>
                                    <i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
                                </div>
                                <div class="modal-body">
                                    ¿Seguro que quieres eliminar este artículo?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="{{url('/borrar-articulo/'.$feed->id)}}" class="btn btn-danger">Eliminar</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>     
                </div>
            @endforeach
        
        <div class="m-auto text-right" style="max-width: 90%">
        {{$feeds->links()}}  
        </div>
        @else
            <p class="w-100 text-center">
                No hay artículos con ese título
            </p>
            
        @endif
    </div>
        


</section>
@endsection