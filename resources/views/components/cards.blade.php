<div class="section-cards">
    <ul class="cards">
        @foreach ($comics as $index => $item)
            <li class="card">
                <a href="{{ route('comic', ['id' => $index]) }}">
                    <div class="card-image">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    </div>
                    <div class="card-title">{{$item['series']}}</div>
                </a>
            </li>
        @endforeach
        </ul>
        <div>
            <button>load more</button>
        </div>
</div>
