@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Editar artículo: {{$feed->title}}</h2>
        <hr>
        <div class="row col-lg-12 justify-center">
            
            <form action="{{ url('/actualizar-articulo/'.$feed->id)}}" method="post" enctype="multipart/form-data" class="col-lg-12">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$feed->title}}">
                </div>
                <div class="form-group">
                    <label for="body">Contenido</label>
                    <textarea class="form-control" rows="10" id="body" name="body" value="">{{$feed->body}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Subir nueva imagen</label>
                    <input type="file" class="" id="image" name="image"value="{{$feed->image}}">
                </div>
                <button type="submit" class="btn btn-warning bg-main border-0 w-100 rounded-0 text-dark">EDITAR ARTÍCULO</button>

            </form>
        
        </div>
    </div>
@endsection