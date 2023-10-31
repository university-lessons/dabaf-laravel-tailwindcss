<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include("shared.head")

    <body class="antialiased">
        <h1>Cars</h1>

        @forelse ($cars as $c)
            <x-car :model="$c->model" :brand="$c->brand" :hp="$c->hp" :photoUrl="$c->photoUrl"/>
        @empty
            <p>No Car available!</p>
        @endforelse
    </body>
</html>
