@extends('layouts.main')

@section('content')
@foreach ($comics as $comic)
    <div>
        <img src="{{url($comic->image)}}" alt="">
        <p>{{$comic->title}}</p>
        <p>{{$comic->type}}</p>
    </div>
@endforeach

@endsection