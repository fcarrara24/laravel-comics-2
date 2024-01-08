<div class="bg-special text-white">
    <div class="container d-flex flex-row align-items-center">
        <div class="left-part w-50 py-3 pe-5">
            <div class= "d-flex flex-row justify-content-between mb-5">
                {{-- getting data from a config file --}}
                @foreach (config('pageCategories.footer-categories') as $category)
                    <div class="d-flex flex-column">
                        <h3>{{ $category['title'] }}</h2>
                            <div class="d-flex flex-column " style="color: grey">
                                @foreach ($category['link'] as $link)
                                    <div>{{ $link }}</div>
                                @endforeach
                            </div>
                    </div>
                @endforeach
            </div>
            <span style="color: grey">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, molestias
                assumenda fugiat quos,
                iste magnam error provident id obcaecati sequi aperiam repellendus nam, ex autem!</span>
        </div>

        <div class="right-part w-50 overflow-hidden ">
            <img src="{{ Vite::asset('resources\img\dc-logo-bg.png') }}" alt="" srcset=""
                style="max-height: 70%">
        </div>
    </div>
</div>
