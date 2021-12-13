@extends('master')
@section('content')
    <div class=" custom-product ">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($products as $item)
                    <div class="carousel-item  {{ $item['id'] == 1 ? 'active' : '' }}">
                        <img class="h-auto d-block slider-img " src="{{ $item['gallery'] }}">
                        <div class="carousel-caption d-none d-md-block bg-success">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="trending-wrapper">
            <h3>Tredning Products</h3>
            @foreach ($products as $item)
                <div class="trening-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img class="trending-image" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h3>{{ $item['name'] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
