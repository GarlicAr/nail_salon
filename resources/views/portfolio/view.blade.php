@extends('layout')
@section('content')
    <div class="portfolio">
        @foreach($imageFiles as $imageFile)
            <div class="portfolio-item">
                <img src="{{ asset('images/portfolio/' . $imageFile) }}" alt="{{ pathinfo($imageFile, PATHINFO_FILENAME) }}">
            </div>
        @endforeach
    </div>
@endsection
