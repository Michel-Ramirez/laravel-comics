<!DOCTYPE html>
<html lang="en">

<body>
    @extends('layouts.main_layout')

    @section('title', 'Home')

    @section('main-content')
        <main>
            <div class="jumbotron">
            </div>
            <div class="wrapper">
                <div class="cards">
                    <div class="banner">CURRENT SERIES</div>
                    <ul class="card-body">
                        @foreach ($comics as $comic)
                            <li>
                                <div class="card">
                                    <figure>
                                        <img src="{{ $comic['thumb'] }}" alt="">
                                    </figure>
                                    <a href="#" class="series">Action Comics #1000: The Deluxe Edition</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
    @endsection
</body>

</html>
