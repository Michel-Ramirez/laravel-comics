<div class="header-top">
    <div class="container">
        <a href="#">DC POWER VISA</a>
        <a href="#">ADDITIONAL DC SITES</a>
    </div>
</div>
<header>
    <div class="container">
        <div class="logo">
            <figure>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo_dc">
            </figure>
        </div>
        <div class="nav">
            <ul>
                @foreach ($h_links as $h_link)
                    <li>
                        <a href="">{{ $h_link }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="search">
        </div>
    </div>
</header>
