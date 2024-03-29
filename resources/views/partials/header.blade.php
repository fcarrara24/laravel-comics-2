@php
    $header = [
        [
            'id' => 0,
            'title' => 'CHARACTERS',
        ],
        [
            'id' => 1,
            'title' => 'MOVIES',
        ],
        [
            'id' => 2,
            'title' => 'TV',
        ],
        [
            'id' => 3,
            'title' => 'GAMES',
        ],
        [
            'id' => 4,
            'title' => 'COLLECTIBLES',
        ],
        [
            'id' => 5,
            'title' => 'VIDEOS',
        ],
        [
            'id' => 6,
            'title' => 'FANS',
        ],
    ];
@endphp

<div id="containerHeader">
    <div class=" d-flex flex-row justify-content-evenly container py-2 ">
        <div class="subcontainer-header d-flex flex-row justify-content-start align-items-center w-max-content">
            <a href="{{ route('comics.index') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="jumbotron"></a>
        </div>
        <div class="d-flex flex-row justify-content-between gap-5 ">
            @foreach ($header as $category)
                <div class=" d-flex flex-column justify-content-between ">
                    <div></div>
                    <div>{{ $category['title'] }}</div>
                    <div class="bottom-color " style="height: 3px;" class="">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex flex-column justify-content-center align-items-end ">
            {{-- <div class="d-flex flex-row justify-content-end align-content-center">
                <span>
                    Search <i class="fa-solid fa-search"></i>
                </span>

            </div> --}}
            <form action="{{ route('comics.index') }}" method="GET" class="d-flex felx-row flex-nowrap">
                <input type="text" name="search" id="search" value="" placeholder="cerca" class="text "
                    style="border-color: transparent; width: 100px; max-width: fit-content; text-align: center;">
                <button type="submit" class="btn btn-success pe-2"><i class="fa-solid fa-search"></i></button>
            </form>
        </div>
        <!-- adding the link to the create -->
        <div class="d-flex flex-row justify-content-center align-items-center plus">
            <h1><a style="text-decoration: none; color: red;" href="{{ route('comics.create') }}">+</a></h1>
        </div>
    </div>
</div>
