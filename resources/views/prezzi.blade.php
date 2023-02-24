<x-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-6 bnvtrasp"><img src="./public/img/bnwtrasp.png" alt=""></div>
        <div class="col-6"><h2 class="text-white">BMW super 2023 disel full</h2></div>
    </div>
</div>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        @foreach ($models as $model)
                        <div class="carousel-item {{$loop->first ? 'active' : ''}} ">
                            <x-carousel
                            img="{{$model['img']}}"
                            name="{{$model['name']}}"
                            prezzo="{{$model['prezzo']}}"
                            />
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    
                </div>
            </div>
        </div>
    </div> 
</x-layout>