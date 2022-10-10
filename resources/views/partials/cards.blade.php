@php
$cards = @config('comics');
@endphp

<div class="cards_wrapper">
    @forelse ($cards as $card)
        <div class="card">
            <a href="{{ route('comic', $loop->index) }}" title="{{ $card['series'] }}">
                <div class="img_wrapper">
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}" />
                </div>
                <h3 class="card_series uppercase">
                    {{ $card['series'] }}
                </h3>
            </a>
        </div>
    @empty
        <h4>
            Non sono presenti Comics :(
        </h4>
    @endempty
</div>
