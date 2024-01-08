<div style="z-index:1000; top: 20vh; left: 50%; transform: translate(-50%, 0);}" id="jumbo" class="position-absolute">
    <section id="comic_info" class="container">
        <form action="{{ route('comics.store') }}" method="POST" class="d-flex flex-column flex-grow-1 gap-1">
            @csrf

            <input type="text" name="title" id="title" placeholder="inserisci titolo"
                class="form-control text-center ">
            <input type="text" name="price" id="price" placeholder="price" class="form-control text-center">
            <input type="text" name="description" id="description" placeholder="description"
                class="form-control text-center">
            <input type="text" name="type" id="type" placeholder="type" class="form-control text-center">
            <input type="text" name="sale_date" id="sale_date" placeholder="sale_date"
                class="form-control text-center">
            <input type="text" name="series" id="series" placeholder="series" class="form-control text-center">

            <button type="submit" class="btn btn-primary">invia</button>
        </form>
    </section>
</div>
