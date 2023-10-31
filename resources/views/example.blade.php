<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.head')

<body class="antialiased">

    <div class="container px-6 py-16 mx-auto text-center dark:bg-black">
        <div class="max-w-lg mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Cars</h1>
            <p class="mt-6 text-gray-500 dark:text-gray-300">
                Check my Cars List!
            </p>
        </div>

        @forelse ($cars as $c)
            <x-car :model="$c->model" :brand="$c->brand" :hp="$c->hp" :photoUrl="$c->photoUrl" />
        @empty
            <p>No Car available!</p>
        @endforelse
    </div>
</body>

</html>
