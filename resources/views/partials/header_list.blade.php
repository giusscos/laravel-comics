@php
$links = [
    [
        'href' => '#',
        'text' => 'Characters',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Comics',
        'currentStatus' => 'active',
    ],
    [
        'href' => '#',
        'text' => 'Movies',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Tv',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Games',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Collectibles',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Videos',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Fans',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'News',
        'currentStatus' => '',
    ],
    [
        'href' => '#',
        'text' => 'Shop',
        'currentStatus' => '',
    ],
];
@endphp
<ul class="nav_list uppercase">
    @foreach ($links as $link)
        <li class="list_item {{ $link['currentStatus'] }}">
            <a class="item_link" href="{{ $link['href'] }}">
                {{ $link['text'] }}
            </a>
        </li>
    @endforeach
</ul>
