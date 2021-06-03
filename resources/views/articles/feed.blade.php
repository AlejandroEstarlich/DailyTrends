<section class="bg-warning py-5">
    <div class="container">
        <h2><b>Nuestros Artículos</b></h2>
        <hr class="border-dark">
    </div>
    <div id="feed-list" class="feed-list d-block m-auto" style="max-width: 90%">
        @foreach($feeds as $feed)
            <div class="feed-item col-lg-4 my-4">
                <div class="cover-image overflow-hidden">
                    @if(Storage::disk('images')->has($feed->image))
                        <img src="{{url('miniatura/'.$feed->image)}}" alt="{{$feed->title}}" class="rounded-top d-block m-auto w-100">
                    @endif
                </div>
                <div class="data d-block m-auto bg-white py-4 px-4 shadow rounded-bottom">
                    <h4>{{$feed->title}}</h4>
                    <p class="mb-2">{{$feed->user->name}}</p>
                    <a class="d-block text-dark " href="{{route('articleDetail', ['feedId' => $feed->id])}}"><b>Leer artículo completo</b> <i class="far fa-arrow-right"></i></a>
                    <br>
                    <!-- Botones de eliminar y editar -->
                    @if(Auth::check() && Auth::user()->id == $feed->user->id)
                        <a href="{{url('/editar-articulo/'.$feed->id)}}" class="btn btn-warning">Editar</a>
                        <a href="{{url('/borrar-articulo/'.$feed->id)}}" class="btn btn-danger">Borrar</a>
                    @endif
                </div>     
            </div>
        @endforeach
    </div>
    <div class="container">
    {{$feeds->links()}}
    </div>


</section>