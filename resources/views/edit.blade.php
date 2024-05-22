@extends('templates.base')
@section('title', 'Movies - Homepage')
@section('content')

<div class="container py-5">
  
<div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 mb-4">Upgrade movie</h2>



                <form method="POST" action="{{route('movie.update', ['movie' => $movie->id])}}">
                @method('PUT')
                @csrf
                <!-- questo qua sopra ci crea un token nascosto contro un attacco hacker tipo -->
                    <div class="form-group">
                        <label for="Name">Title</label>
                        <input type="text" class="form-control" id="Name" value="{{$movie->name}}"   name="name" placeholder="insert movie title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description"  value="{{$movie->description}}"  name="description" placeholder="insert description "/>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" class="form-control" id="year" value="{{$movie->year}}"  name="year"  placeholder="insert year"/>
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate</label>
                        <input type="number" class="form-control" id="rate" value="{{$movie->rate}}"  name="rate"  placeholder="insert rate"/>
                    </div>
                    <div class="form-group">
                        <label for="img">Img</label>
                        <input type="text" class="form-control" id="img" value="{{$movie->img}}"  name="img"  placeholder="insert url img"/>
                    </div>
                 
                    <button type="submit" class="btn btn-outline-warning mt-5">Edit</button>
                </form>
            </div>
        </div>
</div>

@endsection