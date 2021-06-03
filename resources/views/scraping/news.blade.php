<section class="py-5 d-block m-auto" style="max-width: 90%">
    <div class="container">
        <h2><b>Noticias de afiliados</b></h2>
        <hr class="border-dark">
    </div>
    <div class="col-lg-12 feed-list">
    	<div class="col-lg-6">
	        <h3 class="mt-5 text-center">El Mundo</h3>
	 		<div id="feed-list" class="feed-list pl-0">
	            @for($i=0; $i<=5; $i++)
	                <div class="feed-item col-lg-4 my-4">
	                    <div class="data bg-grey-100 py-4 px-4 shadow rounded-bottom">
	                        <h6><b>{{$elMundo[0][$i]}}</b></h4>
							<p>Fuente: {{$elMundo[3][$i]}}</p>
	                        <p>{{$elMundo[1][$i]}}</p>
	                        <a class="text-dark" href="{{$elMundo[2][$i]}}">Leer artículo <i class="far fa-arrow-right"></i></a>
	                    </div>     
	                </div>
	            @endfor
	        </div>
		</div>

		<div class="col-lg-6">
	        <h3 class="mt-5 text-center">El País</h3>
	 		<div id="feed-list" class="feed-list pl-0">
	            @for($i=0; $i<=5; $i++)
	                <div class="feed-item col-lg-4 my-4">
	                    <div class="data bg-grey-100 py-4 px-4 shadow rounded-bottom">
	                        <h6><b>{{$elPais[0][$i]}}</b></h4>
							<p>Fuente: {{$elPais[3][$i]}}</p>
	                        <p>Redacción: <span class="text-uppercase">{{$elPais[1][$i]}}</span></p>
	                        <a class="text-dark" href="{{$elPais[2][$i]}}">Leer artículo <i class="far fa-arrow-right"></i></a>
	                    </div>     
	                </div>
	            @endfor
	        </div>
		</div>
    </div>
    
 
</section>