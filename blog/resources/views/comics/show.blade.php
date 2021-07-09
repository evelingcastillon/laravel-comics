@extends('layout.app')

@section('title', 'Comic DC Comics')

@section('content')
<div class="comic">
    <img src="{{$comic['thumb']}}" alt="">
</div>

@endsection