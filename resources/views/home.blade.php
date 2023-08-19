@extends('layouts.main_layout')

@section('title', 'Home')

@section('main-content')


    <div class="cards">
        <div class="wrapper">
            <div class="banner">CURRENT SERIES</div>
            <ul class="card-body">
                @foreach ($comics as $comic)
                    <li>
                        <div class="card">
                            <figure>
                                <a href="{{ url('/ActionComics#1000') }}" class="series">
                                    <img src="{{ $comic['thumb'] }}" alt="">
                                </a>
                            </figure>
                            <a href="{{ url('/ActionComics#1000') }}" class="series">{{ $comic['title'] }}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
