@if (session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message') }}</div>
@endif

<div>

    <div class="index-bg">

        <div class="w-100" style="background-color: #0282f9; min-height: 70px"></div>
        <div class="container position-relative">
            <div style="padding: 50px, 100px" class="w-100">
                <div class="img-container position-absolute" style="left: 0px; bottom: 107%">
                    <img src="{{ $comic->thumb }}" style="max-width: 180px; height: auto;" alt="">
                </div>
                <div class="d-flex flex-row mb-5">
                    <div class="left-part w-75 ">
                        <h2 class="py-5">{{ strtoupper($comic->title) }}</h2>
                        <div class="w-75 py-2 d-flex flex-row mb-5 px-4"
                            style="border-bottom: black; background-color: #55ba59;">
                            <div class="w-75 d-flex flex-row justify-content-between align-items-center pe-3 text-wrap">
                                <div class="d-flex flex-row gap-2" style="color: #b0fd9c">U.S. Price:
                                    <div style="color: white">{{ $comic->price }}</div>
                                </div>
                                <div style="color: #b0fd9c">AVAILABLE</div>
                            </div>

                            <div class=" d-flex flex-row justify-content-between align-items-center pe-3"
                                style="color: #b0fd9c">
                                Check Availability
                            </div>
                        </div>
                        <span class="w-75">
                            {{ $comic->description }}
                        </span>
                    </div>

                    <div class="left-part w-25 ">
                        <h3 class="d-flex flex-row justify-content-end ">ADVERTISMENT</h3>
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                    </div>
                </div>





            </div>
        </div>

        <div class="specifics" style="background-color: #f6f6f6">
            <div class="container d-flex flex-row justify-content-between ">
                <div class="w-50 px-5">
                    <h2 class="py-4" style="border-bottom: 1px solid #e3e3e3;">Talent</h2>

                    <div class="d-flex flex-row p-2" style="border-bottom: 1px solid #e3e3e3;">
                        <div class="w-25">Art By</div>
                        <div class="w-75 text-primary">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est maxime voluptatibus nemo
                            ipsam, ipsum rem nostrum, nulla laudantium voluptate maiores possimus iusto. Incidunt
                            error labore aperiam aspernatur sequi cumque perferendis?
                        </div>
                    </div>

                    <div class="d-flex flex-row p-2" style="border-bottom: 1px solid #e3e3e3;">
                        <div class="w-25">written by</div>
                        <div class="w-75 text-primary">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est maxime voluptatibus nemo
                            ipsam, ipsum rem nostrum, nulla laudantium voluptate maiores possimus iusto. Incidunt
                            error labore aperiam aspernatur sequi cumque perferendis?
                        </div>
                    </div>

                </div>
                <div class="w-50 px-4 ">
                    <h2 class="py-4" style="border-bottom: 1px solid #e3e3e3;">Specs</h2>

                    <div class="d-flex flex-row p-2" style="border-bottom: 1px solid #e3e3e3;">
                        <div class="w-25">series:</div>
                        <div class="w-75 ">{{ $comic['series'] }}</div>
                    </div>

                    <div class="d-flex flex-row p-2" style="border-bottom: 1px solid #e3e3e3;">
                        <div class="w-25">U.S. price:</div>
                        <div class="w-75 ">{{ $comic['price'] }}</div>
                    </div>

                    <div class="d-flex flex-row p-2" style="border-bottom: 1px solid #e3e3e3;">
                        <div class="w-25">On Sale Date:</div>
                        <div class="w-75 ">{{ $comic['sale_date'] }}</div>
                    </div>
                </div>
            </div>
            <div style="border-top: 1px solid #e3e3e3;">
                <div class="container d-flex flex-row justify-content-evenly ">
                    <div class=" flex-grow-1 d-flex flex-row px-2 justify-content-between "
                        style="border: 1px solid #e3e3e3; ">
                        <div>DIGITAL COMICS</div>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""
                            style="width: 20%; color: gray;">

                    </div>
                    <div class=" flex-grow-1 d-flex flex-row px-2 justify-content-between "
                        style="border: 1px solid #e3e3e3; ">
                        <div>SHOP DC</div>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""
                            style="width: 20%; color: gray;">

                    </div>
                    <div class=" flex-grow-1 d-flex flex-row px-2 justify-content-between "
                        style="border: 1px solid #e3e3e3; ">
                        <div>DIGITAL COMICS</div>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""
                            style="width: 20%; color: gray;">

                    </div>
                    <div class=" flex-grow-1 d-flex flex-row px-2 justify-content-between "
                        style="border: 1px solid #e3e3e3; ">
                        <div>DIGITAL COMICS</div>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""
                            style="width: 20%; color: gray;">

                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
