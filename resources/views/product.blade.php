@extends('layout.body')

@section('body')
@include('components.header') 
<div class="header">
    <figure><img src="{{ asset('./images/jumbotron.jpg') }}" alt="jumbo image"></figure>
    <section>
        <div class="container">
            <div>
                <div class="poster">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            </div>
        </div>
    </section>
</header>
@stop