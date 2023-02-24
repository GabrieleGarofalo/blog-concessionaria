<x-layout>


<div class="contanier d-flex justify-content-center align-items-center my-5">
    <div class="card text-center"  style="width: 500px">
      <div class="card-body">
        <img src="{{$brand['img']}}" class="card-img-top" alt="...">
        <h5 class="card-title">{{$brand['name']}}</h5>
        <p class="card-text">{{$brand['colore']}}</p>
        <p class="card-text">{{$brand['type']}}</p>
          <div class="row">
            <div class="col-6">
              <div class="container d-flex justify-content-start">
              <a href="{{route('marche')}}" class="btn btn-primary">Torna ai Marchi</a>
            </div>
            </div>
            <div class="col-6">
            <div class="container d-flex justify-content-end">
              <a href="{{route('prezzi')}}" class="btn btn-primary">Prezzi</a>
            </div>
            </div>
        </div>
      </div>
    </div>
    </div>
  </x-layout>

