@extends('layouts.main')

@section('content')

<div id="jumbo">
    <div id="current-series">
      <p>CURRENT SERIES</p>
    </div>
</div>

<main>
    <div id="card-main" class="container">
        
        @foreach ($comics as $comic)
            <div>
                <img src="{{url($comic->image)}}" alt="">
                <p>{{$comic->title}}</p>
                <p>{{$comic->type}}</p>
            </div>
        @endforeach
    
    </div>
        
    <div id="load-more">
        <button>LOAD MORE</button>
    </div>
</main>

@endsection