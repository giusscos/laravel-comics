@php
$links = [
    [
        'href' => 'characters',
        'text' => 'Characters',
    ],
    [
        'href' => 'comics',
        'text' => 'Comics',
    ],
    [
        'href' => 'movies',
        'text' => 'Movies',
    ],
    [
        'href' => 'tv',
        'text' => 'Tv',
    ],
    [
        'href' => 'games',
        'text' => 'Games',
    ],
    [
        'href' => 'collectibles',
        'text' => 'Collectibles',
    ],
    [
        'href' => 'videos',
        'text' => 'Videos',
    ],
    [
        'href' => 'fans',
        'text' => 'Fans',
    ],
    [
        'href' => 'news',
        'text' => 'News',
    ],
    [
        'href' => 'shop',
        'text' => 'Shop',
    ],
];
@endphp
<ul class="nav_list uppercase">
    @foreach ($links as $link)
        <li class="list_item {{ Route::currentRouteName() === $link['href'] ? 'active' : ''}}">
            <a class="item_link" href="{{ $link['href'] }}">
                {{ $link['text'] }}
            </a>
        </li>
    @endforeach
</ul>
