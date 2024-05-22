@extends('templates.base')
@section('title', 'Movies - Homepage')
@section('content')

<div class="container py-5">
    <h1 class="text-center mb-3">Welcome to MyMovie</h1>

    <div class="d-flex gap-3 flex-wrap">
        @foreach ($movie as $element)
        


            <div class="card" style="width: 18rem;">
                <a href="{{route('movie.show', ['movie' => $element])}}" class="text-decoration-none fw-bold">
                 <img
                        src="{{$element->img}}" class="card-img-top" alt="img"
                        style="width:100%;height:70%;object-fit:cover"/>
                    
                    </a>

                <div class="card-body">
                    <h5 class="card-title">{{$element->name}}</h5>
                    <p class="card-text">Year: {{$element->price}}</p>

                </div>
            </div>


        @endforeach
    </div>
    <div class="pagI mt-3">
        {{$movie->links()}}
    </div>
</div>

@endsection