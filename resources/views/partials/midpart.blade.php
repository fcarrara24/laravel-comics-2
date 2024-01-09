@php
    $fascia = [
        [
            'title' => 'DIGITAL COMICS',
            'link' => '../../resources/img/buy-comics-digital-comics.png',
        ],
        [
            'title' => 'DC MERCHANDISE',
            'link' => '../../resources/img/buy-comics-merchandise.png',
        ],
        [
            'title' => 'SUBSCRIPTION',
            'link' => '../../resources/img/buy-comics-subscriptions.png',
        ],
        [
            'title' => 'COMIC SHOP PORTAL',
            'link' => '../../resources/img/buy-comics-shop-locator.png',
        ],
        [
            'title' => 'DC POWER VISA',
            'link' => '../../resources/img/buy-dc-power-visa.svg',
        ],
    ];
@endphp


<div class="bg-primary">
    <div class="container d-flex felx-row justify-content-between py-5 gap-5" style="padding: 30px">
        @foreach ($fascia as $elemento)
            <div class="elemento-fascia">

                <div>
                    <img src="{{ Vite::asset($elemento['link']) }}" alt="" srcset="">
                </div>
                <div class="text-white ps-3 ">
                    {{ $elemento['title'] }}
                </div>
            </div>
        @endforeach
    </div>

</div>
