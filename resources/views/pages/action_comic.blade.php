@extends('layouts.main_layout')

@section('title', 'Comics')

@section('main-content')

    <div class="separator-jumbo">
        <div class="wrapper">
            <img src="{{ $comics[0]['thumb'] }}" alt="">
        </div>
    </div>

    <section>
        <div class="wrapper">
            <div class="container-content">
                <div class="content">
                    <h1>{{ $comics[0]['title'] }}</h1>
                    <div class="price-section">
                        <h6>U.S. Price: <span class="price">{{ $comics[0]['price'] }}</span></h6>
                        <button>Check Availability</button>
                    </div>
                    <p>{{ $comics[0]['description'] }}</p>
                </div>
                <div class="advertisement">
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
