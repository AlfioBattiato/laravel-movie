@extends('templates.base')

@section('title', 'Movies - Homepage')

@section('content')
<div style="
  background-image: url({{ $movie->img }});
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  min-height: 70vh;">
    <div class="dk">

        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ $movie->img }}" class="img-fluid" alt="img" style="width: 100%; max-width: 20rem;" />
                </div>
                <div class="col-12 col-lg-8">
                    <h1 class="text-danger">{{ $movie->name }}</h1>
                    <h3 class="text-danger">Overview: </h3>
                    <p class="text-white"> {{ $movie->description }}</p>
                    <p class="text-danger">Year: <span class="text-white"> {{ $movie->year }}</span> </p>
                    <p class="text-danger">Rate: <span class="text-white"> {{ $movie->rate }}</span></p>
                    <div class="mt-5">
                        @auth
                            @if (Auth::user()->id === $movie->user_id)

                                <div class="d-flex gap-2 mt-3">
                                    <a class="btn btn-outline-warning "
                                        href="{{ route('movie.edit', ['movie' => $movie->id]) }}">Edit</a>

                                    <form action="{{ route('movie.destroy', ['movie' => $movie]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </form>

                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection