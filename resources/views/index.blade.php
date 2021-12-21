 @php

$buyComicsItems = [
    [
        'title' => 'DIGITAL COMICS',
        'src' => 'img/buy-comics-digital-comics.png',
    ],
    [
        'title' => 'DC MERCHANDISE',
        'src' => 'img/buy-comics-merchandise.png',
    ],
    [
        'title' => 'SUBSCRIPTION',
        'src' => 'img/buy-comics-subscriptions.png',
    ],
    [
        'title' => 'COMIC SHOP LOCATOR',
        'src' => 'img/buy-comics-shop-locator.png',
    ],
    [
        'title' => 'DC POWER VISA',
        'src' => 'img/buy-dc-power-visa.svg',
    ],
];

@endphp

@extends("layouts.default")

@section('page_title', 'DC Comics')

@section('main_content')


    <main>
        <section class="jumbo_section">
            <img src="{{ asset('img/jumbotron.jpg') }}" alt="jumbotron" />
        </section>


        <section class="cards_section text-center">
            <div class="container py-5">
            {{--  <h1>CURRENT SERIES</h1> --}}
                <div class="row row-cols-6 my-2">
                    @foreach ($comics_list as $comic)
                        <div class="dc_card">
                            <div class="dc_card_img">
                                <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}" />
                            </div>
                            <p class="dc_card_txt mt-2 mb-5">{{ $comic['title'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="mb-5">LOAD MORE</button>
        </section>


        <div class="buy-section">
            <div class="container py-5">
                <ul class="d-flex ">
                    @foreach ($buyComicsItems as $item)
                        <li>
                            <a class="d-flex" href={{ $item['title'] }}>
                                <div class="footer-card">
                                    <img src="{{ asset($item['src']) }}" alt="" />
                                </div>
                                <h3>{{ $item['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </main>




@endsection
