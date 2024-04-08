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