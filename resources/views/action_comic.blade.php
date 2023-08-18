@extends('layouts.main_layout')

@section('title', 'Comics')

@section('main-content')

    <div class="separator-jumbo">
        @foreach ($comics as $comic)
            <img src="{{ $comic['thumb'] }}" alt="">
        @endforeach
    </div>

    <section>

    </section>

@endsection
