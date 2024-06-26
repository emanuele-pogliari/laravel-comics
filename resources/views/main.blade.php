@extends('layouts/app')
@section('content')
<main>
    <div class="content-container">
        <div class="current-series">Current Series</div>
        <div class="content">
        @foreach($comics as $comic)
                <div class="comic">
                    <img class="mb-3" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h4>{{ $comic['series'] }}</h4>
                </div>
        @endforeach  
        
        <button class="load-btn">Load More</button>                 
        </div>
    
    </div>
    <div class="ecommerce-container">
        <ul>
            @foreach($links as $link)
            <li>
                <img src="{{ Vite::asset('resources' . $link['image'])}}">
                <p>{{ $link['name'] }}</p>
            </li>
            @endforeach
        </ul>
    </div>
    
</main>
@endsection