@extends('layout.app')

@section('mainContent')
    @include('partials.jumbo')
    <div class="series_wrapper container">
        @dump($comic)
    </div>
@endsection
