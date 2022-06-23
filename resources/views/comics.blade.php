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
            <div id="single-card">
                <div>
                    <img src="{{url($comic->image)}}" alt="">
                </div>
                <p>{{$comic->title}}</p>
            </div>
        @endforeach
    
    </div>
        
    <div id="load-more">
        <button>LOAD MORE</button>
    </div>
</main>

@endsection