@extends('layout.body')

@section('body')
@include('components.header') 
<div class="content">
    <div class="header">
        <figure><img src="{{ asset('./images/jumbotron.jpg') }}" alt="jumbo image"></figure>
        <section>
            <div class="container">
                <div>
                    <div class="poster" data-type="{{ $comic['type'] }}" data-series="{{ $comic['series'] }}">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                </div>
            </div>
        </section>
    </div>
    
    <div class="body">
        <div class="container">
            <div>
                <div class="container-content">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="available">
                        <div>
                            <div class="price"><strong>U.S.Price: </strong><span>{{ $comic['price'] }}</span></div>
                            <div class="label"><strong>Available</strong></div>
                        </div>
                        <div>
                            <button>Check Availability</button>
                        </div>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <aside>
                    <h3>Advertisement</h3>
                    <figure><img src="{{ asset('./images/adv.jpg') }}" alt="image" /></figure>
                </aside>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
@stop
