@extends('layouts.main')

@section('content')

    <main class="wrap-comics mt-1"> 
        <section class="hero p-r">
            <div class="wrapper p-a cover">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="teen go">
            </div>
            <div class="hero-text p-a">
                <h1>Current series</h1>
            </div>
        </section>

        <div class="comics">
            <div class="line"></div>
            <div class="wrapper pt-2 pb-2">
                <ul class="comics-list no-list mb-3">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['slug']) }}" class="no-list">
                                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                                <h3> {{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="btn">
                    <a href="#" class="no-list">Load more</a>
                </div>
            </div>
            </div>
        </div>

        <section class="comics-info">
            <div class="wrapper-info">
                <a href="#" class="no-list">
                    <ul class="wrapper flex a-c jc-center no-list pt-3">
                        <li class="pr-2 mr-1 flex a-c">
                            <img src="{{ asset('images/digital-comics.png') }}" alt="dc">
                            <h4 class="pl-1">Digital comics</h4>
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <img src="{{ asset('images/merchandise.png') }}" alt="dc">
                            <h4 class="pl-1">Dc merchandise</h4>
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <img src="{{ asset('images/subscriptions.png') }}" alt="dc">
                            <h4 class="pl-1">Subscription</h4>
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <img src="{{ asset('images/shop-locator.png') }}" alt="dc">
                            <h4 class="pl-1">Comic shop locator</h4>
                        </li>
                        <li class="pr-2 mr-1 flex a-c">
                            <img src="{{ asset('images/power-visa.svg') }}" alt="dc">
                            <h4 class="pl-1">Cd power visa</h4>
                        </li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="white-space p-r"></section>
    </main>
    
@endsection