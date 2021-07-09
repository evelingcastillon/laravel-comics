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

    <section class="btn_lead_more">
        <a href="#">
            LEAD MORE
        </a>
    </section>

</div>
<section class="other_options">
    <div class="container">

        <div class="option">
            <img src="./img/buy-comics-digital-comics.png" alt="">
            <p>DIGITAL COMICS</p>
        </div>
        <div class="option">
            <img src="./img/buy-comics-merchandise.png" alt="">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="option">
            <img src="./img/buy-comics-subscriptions.png" alt="">
            <p>SUBSCRIPTION</p>
        </div>
        <div class="option">
            <img src="./img/buy-comics-shop-locator.png" alt="">
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="option">
            <img class="card" src="./img/buy-dc-power-visa.svg" alt="">
            <p>COMIC SHOP LOCATOR</p>
        </div>
    </div>
</section>

@endsection