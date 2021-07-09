@extends('layout.app')

@section('title', 'Comic DC Comics')

@section('content')
<h1>Comic</h1>
<div class="box_comic">
    @foreach ($comics as $index => $comic)
    <a href="{{route('comic', ['id' => $index])}}">
        <img src="{{$comic['thumb']}}" alt="">
        <p>{{ $comic['series']}}</p>
    </a>
    @endforeach
</div>

@endsection