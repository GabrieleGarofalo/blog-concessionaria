<x-layout>
    <!--sezione principale-->
    <main class="container-fluid bg-image d-flex justify-content-center">

        <div class="row justify-content-end align-items-center justify-content-center h-100">
            <div class="col-md-10 col-12 me-5">
                <p class=" colore-testo text-center ">RIVENDITA AUTO QUALIFICATA</p>
                <h1 class="text-center  text-white font-12vh mb-4">consegna in un giorno!</h1>
                <p class="text-secondary slogan">Guida il lusso con stile, scegli la tua auto di prestigio con noi.</p>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <button class="btn btn-dark mt-4 py-3" type="button">prenota e chiamaci ora!</button>
                </div>
            </div>
        </div>
    </main>
    <div class="container">
        <div class="row justify-content-center my-5">
            @foreach ($inizio as $element)
            <div class="col-12 col-md-5">
                <div class="card">
                    <img src="{{$element['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$element['name']}}</h5>
                      <a href="{{route('marche')}}" class="btn btn-primary">Marche</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>



