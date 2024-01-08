@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron')
@endsection

<div id="jumbo"></div>


@section('midpart')
    @include('partials.midpart')
@endsection


<section id="comic_info" class="container">
    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <input type="text" name="title" id="title" placeholder="inserisci titolo" class="form-control">
        <input type="text" name="price" id="price" placeholder="inserisci titolo" class="form-control">
        <input type="text" name="description" id="description" placeholder="inserisci titolo" class="form-control">
        <input type="text" name="type" id="type" placeholder="inserisci titolo" class="form-control">

        <button type="submit" class="btn btn-primary">invia</button>
    </form>
</section>
