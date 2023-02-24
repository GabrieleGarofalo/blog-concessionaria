<x-layout>
<div class="container my-5">
    <div class="row">
        @foreach ($brands as $brand)
        <div class="col-12 col-md-3">
            <x-card
            img="{{$brand['img']}}"
            name="{{$brand['name']}}"
            motore="{{$brand['motore']}}"
            velmax="{{$brand['velmax']}}"
            />
        </div>
        @endforeach

    </div>
</div>
</x-layout>