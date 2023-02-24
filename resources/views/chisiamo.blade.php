<x-layout>
<div class="container my-5">
    <div class="row d-flex justify-content-center align-items-center">
        @foreach ($dipendenti as $dipendente)
        <div class="col-12 col-md-3">
            <x-carddip
            img="{{$dipendente['img']}}"
            name="{{$dipendente['name']}}"
            mansione="{{$dipendente['mansione']}}"
            />
        </div>
        @endforeach

    </div>
</div>
</x-layout>