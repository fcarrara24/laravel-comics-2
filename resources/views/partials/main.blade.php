<div class=" main-bg position-relative ">

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif


    <div class="container pt-5 position-relative ">
        <div class="my-series bg-primary text-white px-5 py-1">
            <h3>CURRENT SERIES</h3>
        </div>

        <div class="my-search bg-primary text-white px-5 py-1">
            <h3> CERCA</h3>
            <form action="{{ route('comics.index') }}" method="GET">
                <input type="text" name="search" id="search" value="" placeholder="cerca" class="text">
                <button type="submit" class="btn btn-success ">invia</button>
            </form>
        </div>
        <div class="row ">
            @foreach ($comics as $comic)
                <div class="w-25" style=" max-height: 60%;">
                    {{-- sposto il link delle informazioni specifiche dell'immagine per fare spazio ad altre informazioni --}}

                    <a href="{{ route('comics.show', $comic->id) }}">
                        <div class="img-container  overflow-hidden " style="max-width: 100%; max-height: 60%; ">
                            {{-- handling comics without image --}}
                            @if (!file_exists(public_path($comic->thumb)))
                                <img src="{{ $comic->thumb }}" alt="$comic->title" srcset=""
                                    style="max-width: 100%; width: 100%; max-height: 100%">
                            @else
                                <img src="https://picsum.photos/300/400" class="w-100" alt="">
                            @endif
                        </div>
                        <div class=" text-white pb-3">{{ $comic->series }}</div>

                    </a>
                    <div class="d-flex flex-row gap-2">



                        <button class="btn btn-success ">
                            <a href="{{ route('comics.edit', $comic) }}" class="text-white text-decoration-none ">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </button>




                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="d-flex flex-row justify-content-center py-3">
        <div class="  bg-primary text-white px-5 py-1"> LOAD MORE </div>
    </div>

</div>
