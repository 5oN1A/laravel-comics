@php

$nav_links = [
    [
        'title' => 'CHARACTERS',
        'route_name' => 'characters.index',
    ],
    [
        'title' => 'COMICS',
        'route_name' => 'comics.index',
    ],
    [
        'title' => 'MOVIES',
        'route_name' => 'movies.index',
    ],
    [
        'title' => 'TV',
        'route_name' => 'tv.index',
    ],
    [
        'title' => 'GAMES',
        'route_name' => 'games.index',
    ],
    [
        'title' => 'COLLECTIBLES',
        'route_name' => 'collectibles.index',
    ],
    [
        'title' => 'VIDEOS',
        'route_name' => 'videos.index',
    ],
    [
        'title' => 'FANS',
        'route_name' => 'fans.index',
    ],
    [
        'title' => 'NEWS',
        'route_name' => 'news.index',
    ],
    [
        'title' => 'SHOP',
        'route_name' => 'shop.index',
    ],
];

@endphp

<header class="header">
    <div class="container">


        <nav class="navbar navbar-light py-3 align-items-center">
            <div class="container">

                <img src="{{ asset('img/dc-logo.png') }}" alt="dc logo" />

                <ul class="m-0">
                    @foreach ($nav_links as $link)
                        <li class="d-inline-block">
                            <a href="{{ route($link['route_name']) }}"
                                class="text-decoration-none text-dark d-inline-block px-2">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="d-flex">

                    <input type="search" class="h-100 flex-grow-1 border-0 w-100" placeholder="Search">

                    <i class="fas fa-search"></i>
                </div>
            </div>
    </div>
    </nav>
    </div>
</header>
