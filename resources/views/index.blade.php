@extends('templates.base')
@section('title', 'Movies - Homepage')
@section('content')





<div class="container py-5">
    <div class="'my-5 text-center py-5">
        <img src="	https://altadefinizione.food/templates/Dark/img/light.png" alt="" srcset="">
        <h5 class="text-warning">
            MyMovie(2024)-Il film in altadefinizione a portata di un click
        </h5>
        <p class="text-danger">
            MyMovie-l'Unico Originale!<i class="bi bi-check-all text-success fs-2"></i> Rimani sempre aggiornato
        </p>
        <img src="	https://altadefinizione.food/altaqualita/banneriptv.gif" alt="" srcset="">
    </div>


    <h4 class="mb-3">Popular Movie</h4>

    <div class="d-flex gap-3 flex-wrap">
        @foreach ($movie as $element)



            <a href="{{route('movie.show', ['movie' => $element])}}" class="text-decoration-none fw-bold">

                <img src="{{$element->img}}" class=" img-fluid" alt="img" style="width: 12rem; height: 16rem" />
                <div class="card-body text-white" style="width: 12rem">
                    <p class="m-1">{{$element->name}}</p>
                    <div class="d-flex justify-content-between">
                        <p class="text-warning m-0"><i class="bi bi-star-fill me-2"></i><span
                                class="text-white">{{$element->rate}}</span></p>
                        <p class="text-primary m-0"> <span class="badge text-bg-secondary"> {{$element->year}}</span></p>
                    </div>
                </div>
            </a>


        @endforeach
    </div>
    <div class="pagI mt-3">
        {{$movie->links()}}
    </div>
</div>

@endsection