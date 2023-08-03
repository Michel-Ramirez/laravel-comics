<!DOCTYPE html>
<html lang="en">

<body>
    @extends('layouts.main_layout')

    @section('title', 'Home')

    @section('main-content')
        <main>
            <div class="jumbotron">
            </div>
            <div class="wrapper container">
                <div class="cards">
                    <div class="banner">CURRENT SERIES</div>
                    <ul>
                        <li>
                            <div class="card">
                                <img src="https://m.media-amazon.com/images/I/91Rajxin57L.jpg" alt="">
                                <p class="series">Action Comics #1000: The Deluxe Edition</p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- <button class="btn-more">LOAD MORE</button> --}}
            </div>
        </main>
    @endsection
</body>

</html>
