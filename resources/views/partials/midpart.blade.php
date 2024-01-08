<div class="bg-primary">
    <div class="container d-flex felx-row justify-content-between py-5 gap-5" style="padding: 30px">
        @foreach (config('pageCategories.fascia') as $elemento)
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
