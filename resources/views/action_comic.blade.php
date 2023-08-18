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
                </div>
                <div class="advertisement"></div>
            </div>
        </div>
    </section>

@endsection
