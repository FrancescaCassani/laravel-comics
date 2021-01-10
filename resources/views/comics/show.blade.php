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


        <section class="info flex jc-between p-r">
            <div class="wrapper talent p-a pt-2">
                <h1 class="pb-2">TALENT</h1>
                <div class="art-by flex pb-1">
                    <h4>Art by:</h4>
                    <a href="#" class="no-list"><h4>Sandy Jarrel, Agnes Garbowska</h4></a>
                </div>
                <div class="written-by flex pb-1 pt-1">
                    <h4>Written by:</h4>
                    <a href="#" class="no-list"><h4>P.C. Morrissey, Heather Nuhfer</h4></a>
                </div>
            </div>

            <div class="wrapper specs p-a pt-2">
                <h1 class="pb-2">SPECS</h1>
                <div class="series flex pb-1">
                    <h4>Series:</h4>
                    <a href="#" class="no-list"><h4>{{ $comic['title'] }} 2020</h4></a>
                </div>
                <div class="price flex pb-1 pt-1">
                    <h4>U.S. Price:</h4>
                    <h4 class="pl-1">{{ $comic['price'] }}</h4>
                </div>
                <div class="sale flex pb-1 pt-1">
                    <h4>On Sale Date:</h4>
                    <h4 class="pl-1">Nov 10 2020</h4>
                </div>
            </div>
        </section>

        <section class="info-detail">
            <div class="wrapper-info-detail p-r">
                <a href="#" class="no-list">
                    <ul class="wrapper flex a-c jc-center no-list pt-3">
                        <li class="pr-2 mr-1 flex a-c border">
                            <h5 class="pr-3">Digital comics</h5>
                            <img src="{{ asset('images/digital.png')}}" alt="dc">
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <h5 class="pr-3">SHOP DC</h5>
                            <img src="{{ asset('images/shop.png')}}" alt="dc">
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <h5 class="pr-3">Comic shop leocator</h5>
                            <img src="{{ asset('images/locator.png')}}" alt="dc">
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <h5 class="pr-3">Subscriptions</h5>
                            <img src="{{ asset('images/subscription.png')}}" alt="dc">
                        </li>
                    </ul>
                </a>
                
            </div>
        </section>
    </main>
    
@endsection