@php
$cards = @config('comics');

@endphp
<div class="cards_wrapper">
    @foreach ($cards as $card)
        <div class="card">
            <a href="#" title="{{ $card['series'] }}">
                <div class="img_wrapper">
                    <img src="{{$card['thumb']}}" alt="{{$card['series']}}" />
                </div>
                <h3 class="card_series uppercase">
                    {{ $card['series'] }}
                </h3>
            </a>
        </div>
    @endforeach
</div>
