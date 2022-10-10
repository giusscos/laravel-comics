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
        <div class="detail_wrapper">
            <div class="container">
                <div class="cat-detail">
                    <div class="cat-title">
                        <h4>
                            Talent
                        </h4>
                    </div>
                    <ul class="list detail-list">
                        <li class="list-item">
                            <span class="title">
                                Art by:
                            </span>
                            <div class="content">
                                @foreach ($comic['artists'] as $artist)
                                    <a href="#" class="item-link artist">
                                        {{ $artist }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                        <li class="list-item">
                            <span class="title">
                                Written by:
                            </span>
                            <div class="content">
                                @foreach ($comic['writers'] as $writer)
                                    <a href="#" class="item-link writters">
                                        {{ $writer }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cat-detail">
                    <div class="cat-title">
                        <h4>
                            Specs
                        </h4>
                    </div>
                    <ul class="list detail-list">
                        <li class="list-item">
                            <span class="title">
                                Series:
                            </span>
                            <div class="content">
                                <a href="#" class="uppercase">
                                {{ $comic['series'] }}
                                </a>
                            </div>
                        </li>
                        <li class="list-item">
                            <span class="title">
                                U.S. Price:
                            </span>
                            <div class="content">
                                <span class="price">
                                    {{ $comic['price'] }}
                                </span>
                            </div>
                        </li>
                        <li class="list-item">
                            <span class="title capitalize">
                                On sale date:
                            </span>
                            <div class="content">
                                <span class="price">
                                    {{ $comic['sale_date'] }}
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
