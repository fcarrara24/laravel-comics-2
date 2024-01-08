<div style=" background-color: #565656; padding-top: 25px; padding-bottom: 25px;"
    class="d-flex flex-row justify-content-between px-2 ">
    <div style="border: 2px solid blue;" class="text-white p-2">
        SIGN UP NOW
    </div>
    <div class="d-flex flex-row justify-content-between gap-2 align-content-center">
        <h2 class=" text-primary ">FOLLOW US</h2>
        @for ($i = 1; $i <= 5; $i++)
            <img src="{{ Vite::asset('../../resources/img/footer-' . $i . '.png') }}" alt="">
        @endfor


    </div>

</div>
