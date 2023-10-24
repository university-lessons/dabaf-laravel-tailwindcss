<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include("shared.head")

    <body class="antialiased">
        <h1>Blade Example</h1>

        <h2>Conditionals</h2>

        @if($car)
            <x-car :model="$car->model" :brand="$car->brand" :hp="$car->hp"/>
        @else
            <p>Car not available!</p>
        @endif

        <h2>Loops</h2>

        @forelse ($cars as $c)
            <x-car :model="$c->model" :brand="$c->brand" :hp="$c->hp"/>
        @empty
            <p>No Car available!</p>
        @endforelse
    </body>
</html>
