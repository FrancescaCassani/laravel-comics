@extends('layouts.main')

@section('content')

    <main class="wrap-comics mt-1"> 
        <section class="hero">
            <div class="wrapper">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="teen go">
            </div>
        </section>

        <div class="comics mb-3">
            <div class="line"></div>
            <div class="wrapper pt-2 pb-6">
                <ul class="comics-list no-list">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['id']) }}" class="no-list">
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

    </main>
    
@endsection