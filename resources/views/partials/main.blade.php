<div class=" main-bg position-relative ">

    <div class="container pt-5 position-relative ">
        <div class="my-series bg-primary text-white px-5 py-1">
            <h3>CURRENT SERIES</h1>
        </div>
        <div class="row ">
            @foreach ($comics as $comic)
                <div class="w-25" style=" max-height: 60%;">
                    <div class="img-container  overflow-hidden " style="max-width: 100%; max-height: 60%; ">
                        <img src="{{ $comic->thumb }}" alt="$comic->title" srcset=""
                            style="max-width: 100%; width: 100%; max-height: 100%">
                    </div>
                    <div class=" text-white pb-3">{{ $comic->series }}</div>
                    <div class="btn btn-primary">
                        <a href="{{ route('comics.show', $comic->id) }}"
                            class="text-white text-decoration-none ">INFORMAZIONI</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="d-flex flex-row justify-content-center py-3">
        <div class="  bg-primary text-white px-5 py-1"> LOAD MORE </div>
    </div>

</div>
