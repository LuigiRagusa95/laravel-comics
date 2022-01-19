<header>
    <div class="container">
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('./images/dc-logo.png') }}" alt="dc logo">
            </a>
    
            <nav>
                <ul>
                    <li @if (Request::route()->getName() === "home") class="active" @endif><a href="{{ route('home') }}">Comics</a></li>
                    <li @if (Request::route()->getName() === "news") class="active" @endif><a href="{{ route('news') }}">News</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>