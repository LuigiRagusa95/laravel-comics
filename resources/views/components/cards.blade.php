<div class="section-cards">
    <ul class="cards">
        @foreach ($comics as $item)
            <li class="card">
                <a href="/">
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
