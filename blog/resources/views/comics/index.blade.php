@extends('layout.app')

@section('title', 'Comic DC Comics')

@section('content')
<div class="container">

    <h2 class="title_comics">CURRENT SERIES</h2>
    <div class="box_comic">
        @foreach ($comics as $index => $comic)
        <a href="{{route('comic', ['id' => $index])}}">
            <div class="img_comics">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <p>{{ $comic['series']}}</p>
        </a>
        @endforeach
    </div>

    <div class="btn_lead_more">
        <a href="#">
            LEAD MORE
        </a>
    </div>
</div>

@endsection