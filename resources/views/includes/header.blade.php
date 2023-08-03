<div class="header-top">
    <div class="container">
        <a href="#">DC POWER VISA</a>
        <a href="#">ADDITIONAL DC SITES</a>
    </div>
</div>
<header>
    <div class="logo">
        <figure>
            <img src="img/dc-logo.png" alt="logo_dc">
        </figure>
    </div>
    <div class="nav">
        <ul>
            @foreach ($h_links as $link)
                <li>{{ $link }}</li>
            @endforeach
        </ul>
    </div>
</header>
