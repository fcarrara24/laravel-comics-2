@extends('layouts.app')
{{-- checkning if addition executed correctly --}}


@section('mainContent')
    @include('partials.main')
@endsection

@section('midpart')
    @include('partials.midpart')
@endsection

@section('footer')
    @include('partials.bottom')
    @include('partials.footer')
@endsection
