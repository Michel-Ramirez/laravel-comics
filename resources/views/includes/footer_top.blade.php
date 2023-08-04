@php
    $items = [
        [
            'text' => 'DIGITAL COMICS',
            'url' => '#',
            'img' => './resources/img/buy-comics-digital-comics.png',
        ],
        [
            'text' => 'DC MERCHANDISE',
            'url' => '#',
            'img' => 'buy-comics-merchandise.png',
        ],
        [
            'text' => 'SUBSCRIPTION',
            'url' => '#',
            'img' => 'buy-comics-shop-locator.png',
        ],
        [
            'text' => 'COMICS SHOP LACATOR',
            'url' => '#',
            'img' => 'buy-comics-subscriptions.png',
        ],
        [
            'text' => 'DC POWER VISA',
            'url' => '#',
            'img' => 'buy-dc-power-visa.svg',
        ],
    ];
@endphp

<div class="head-footer">
    <ul class="container">
        @foreach ($items as $item)
            <li>
                <img src="{{ $item['img'] }}" alt="{{ $item['text'] }}">
                <a href="#">{{ $item['text'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
