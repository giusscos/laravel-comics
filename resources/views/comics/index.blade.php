@extends('layout.app')

@section('metaTitle', 'Comics - DC Comics')

@section('mainContent')
    @include('partials.jumbo')
    <div class="series_wrapper container">
        <div class="btn info_btn uppercase">
            Current series
        </div>
        @include('partials.cards')
        <div class="btn viewer_btn uppercase">
            Load more
        </div>
    </div>
@endsection
