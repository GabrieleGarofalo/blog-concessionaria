<div class="card my-1" style="width: 17rem;">
    <img src="{{$img}}" class="card-img-top" height="210vh" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$name}}</h5>
    <p class="card-text">{{$motore}}</p>
    <p class="card-text">{{$velmax}}</p>
    <a href="{{route('marche.dettaglio',['name'=>$name ])}}" class="btn">Dettaglio</a>
    </div>
</div>
