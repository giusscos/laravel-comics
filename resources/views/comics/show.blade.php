@extends('layout.app')

@section('mainContent')
    @include('partials.jumbo')
    <div class="comic_wrapper">
        <div class="container">
            <div class="comic-thumb">
                <img src="{{ $comic['thumb'] }}">
            </div>
            <div class="comic-info">
                <div class="info">
                    <h3 class="title uppercase">
                        {{ $comic['title'] }}
                    </h3>
                    <span class="price">
                        <span>U.S. Price:</span>    
                        {{ $comic['price'] }}
                        <span class="store uppercase">available</span>
                        <select>
                            <option>Check availability</option>
                        </select>
                    </span>
                    <p class="desc">
                        {{ $comic['description'] }}
                    </p>
                </div>
                <div class="adv">
                    <span class="uppercase">advertisement</span>
                    <img src="{{ @asset('./img/adv.jpg') }}" alt="adv" />
                </div>
            </div>
        </div>
    </div>
@endsection
