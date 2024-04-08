@extends('layouts/app')
@section('main')
<main>
    <div class="content-container">
        <div class="content">
        @foreach($comics as $comic)
                <div class="comic">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h4>{{ $comic['series'] }}</h4>
                </div>
        @endforeach   
    </div>
    <div class="current-series">Current Series</div>
        <button class="load-btn">Load More</button>                 
    </div>
</main>
@endsection