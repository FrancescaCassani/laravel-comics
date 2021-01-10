@extends('layouts.main')


@section('content')

    <main class="comic-detail"> 
        <section class="hero hero-detail p-r" style="background-image: url( {{$comic['image-hero'] }});">
            <div class="wrapper comic-cover p-a">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>

        <section class="blue-space"></section>

        <section class="wrapper details flex mt-2">
            <article class="left pt-1 pb-1 mr-1">
                <h2 class="">{{$comic['title']}}</h2>
                <div class="info-box flex jc-between mt-2 mb-2">
                    <div class="price flex jc-between">
                        U.S. Price: ${{ $comic['price'] }}
                        <span class="txtUpper">
                            Available on 11/10
                        </span>
                    </div>
                    <span class="availability">
                        Check Availability <i class="fas fa-angle-down"></i>
                    </span>
                </div>
                <div class="descr">
                    {!! $comic['body'] !!}
                </div>
            </article>
            <aside class="right adv mt-1 mb-1">
                <h3>Advertisement</h3>
                <img src="{{ asset('images/lateral.png')}}" alt="Advertising">
            </aside>
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