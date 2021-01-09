@extends('layouts.main')


@section('content')

    <main class="comic-detail"> 
        <section class="hero hero-detail p-r" style="background-image: url( {{$comic['image-hero'] }});">
            <div class="wrapper comic-cover p-a">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>

        <section class="blue-space"></section>

        <section class="details p-r pb-3">
            <div class="wrapper">
                <h1> {{ $comic['title'] }} </h1>
            </div>

            <div class="wrapper flex jc-between">
                <div class="price flex jc-between"> 
                    <h3>U.S. Price: ${{ $comic['price'] }} </h3>
                    <h3>Available on 11/10</h3>
                </div>
                <div class="availability p-r flex jc-end">
                    <h3>Check Avaibility</h3>
                    <i class="fas fa-sort-down p-a"></i>
                </div>
            </div>

            <div class="wrapper">
                <div class="text"> {!! $comic['body'] !!} </div>

                <div class="img-advertisement">
                    <img src="{{ asset('images/adv.png') }}" alt="adv">
                </div>
            </div>
        </section>


        <section class="wrapper info flex">
            <div class="talent">
                <h1>TALENT</h1>
                <div class="art-by flex">
                    <h4>Art by:</h4>
                    <h4>Sandy Jarrel, Agnes Garbowska</h4>
                </div>
                <div class="written-by flex">
                    <h4>Written by:</h4>
                    <h4>P.C. Morrissey, Heather Nuhfer</h4>
                </div>
            </div>

            <div class="specs">
                <h1>SPECS</h1>
                <div class="series flex">
                    <h4>Series:</h4>
                    <h4>{{ $comic['title'] }} 2020</h4>
                </div>
                <div class="price flex">
                    <h4>U.S. Price:</h4>
                    <h4>{{ $comic['price'] }}</h4>
                </div>
                <div class="sale flex">
                    <h4>On Sale Date</h4>
                    <h4>Nov 10 2020</h4>
                </div>
            </div>
        </section>
    </main>
    
@endsection