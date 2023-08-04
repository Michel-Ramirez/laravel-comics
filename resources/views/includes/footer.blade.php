@php
    $ft_dc_links = [
        [
            'text' => 'Characters',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Comics',
            'url' => '#',
            'visited' => true,
        ],
        [
            'text' => 'Movies',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'TV',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Games',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Videos',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'News',
            'url' => '#',
            'visited' => false,
        ],
    ];
    $ft_shop_links = [
        [
            'text' => 'Shop DC',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Shop DC Collectibles',
            'url' => '#',
            'visited' => false,
        ],
    ];
    $links_dc = [
        [
            'text' => 'Terms Of Use',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Privacy policy (New)',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Ad Choices',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Advertising',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Jobs',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Subscritions',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Talent Workshops',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'CPSC Certificates',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Ratings',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Shop Help',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'Contact Us',
            'url' => '#',
            'visited' => false,
        ],
    ];
    $links_site = [
        [
            'text' => 'DC',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'MAD Magazine',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'DC Kids',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'DC universe',
            'url' => '#',
            'visited' => false,
        ],
        [
            'text' => 'DC Power Visa',
            'url' => '#',
            'visited' => false,
        ],
    ];
@endphp

<footer>
    @include('includes.footer_top')
    <div class="main-footer">
        <div class="wrapper">
            <div class="nav-site">
                <div class="wrapper-col">
                    <div class="col col-left">
                        <h4>DC COMICS</h4>
                        <ul>
                            @foreach ($ft_dc_links as $dc_link)
                                <li>
                                    <a href="{{ $dc_link['url'] }}">
                                        {{ $dc_link['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>

                        <h4>SHOP</h4>
                        <ul>
                            @foreach ($ft_shop_links as $sh_link)
                            @endforeach
                            <li>
                                <a href="{{ $sh_link['url'] }}">{{ $sh_link['text'] }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-center">
                        <h4>DC</h4>
                        <ul>
                            @foreach ($links_dc as $dc_link)
                                <li>
                                    <a href="{{ $dc_link['url'] }}">{{ $dc_link['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col col-right">
                        <h4>SITE</h4>
                        <ul>
                            @foreach ($links_site as $site_link)
                                <li>
                                    <a href="{{ $site_link['url'] }}">{{ $site_link['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
    {{-- footerBottom  --}}
</footer>
