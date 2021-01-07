@extends('layouts.main')

@section('content')

    <main class="wrap-comics mt-1"> 
        <section class="hero">
            <div class="wrapper">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="teen go">
            </div>
        </section>

        <div class="comics mt-3 mb-3">
            <div class="wrapper">
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
                </div>
            </div>
        </div>

    </main>
    
@endsection