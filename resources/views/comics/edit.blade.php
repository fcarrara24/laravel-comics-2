@extends('layouts.app')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('form')
    <div style="z-index:1000; top: 20vh; left: 50%; transform: translate(-50%, 0);}" id="jumbo" class="position-absolute">
        <section id="comic_info" class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST"
                class="d-flex flex-column flex-grow-1 gap-1">
                @csrf
                @method('PUT')

                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}"
                    placeholder="inserisci titolo" class="form-control text-center ">

                <label for="price">prezzo</label>
                <input type="text" name="price" id="price" value="{{ old('price', $comic->price) }}"
                    placeholder="price" class="form-control text-center">

                <label for="description">descrizione</label>
                <textarea type="text" name="description" id="description" value="{{ old('description', $comic->description) }}"
                    placeholder="description" class="form-control text-center"></textarea>

                <label for="type">tipo</label>
                <input type="text" name="type" id="type" value="{{ old('type', $comic->type) }}"
                    placeholder="type" class="form-control text-center">

                <label for="sale_date">data</label>
                <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"
                    placeholder="sale_date" class="form-control text-center">

                <label for="series">serie</label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}"
                    placeholder="series" class="form-control text-center">

                <label for="thumb">link immagine</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}"
                    placeholder="thumb" class="form-control text-center">

                <button type="submit" class="btn btn-primary">invia</button>
            </form>
        </section>
    </div>
@endsection
