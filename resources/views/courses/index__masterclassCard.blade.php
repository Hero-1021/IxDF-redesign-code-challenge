@props(['masterclass'])

<article class="relative bg-white shadow-lg rounded-xl overflow-hidden border border-gray-200">
    <a href="{{ $masterclass->url }}" class="block">
        <h3 class="text-lg font-semibold p-4">{{ $masterclass->title }}</h3>
    </a>

    <div class="relative">
        <picture>
            <img src="{{ $masterclass->picture_path }}" class="w-full h-48 object-cover" alt="{{ $masterclass->title }}">
        </picture>
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white text-sm p-2 truncate w-full">
            {{ $masterclass->title }}
        </div>
    </div>

    <div class="p-4">
        <p class="text-gray-600 truncate">{{ $masterclass->short_description }}</p>
        <p class="text-sm text-gray-500 truncate">
            By
            @foreach($masterclass->speakers as $speaker)
                {{ $speaker->name }}@if(!$loop->last), @endif
            @endforeach
        </p>
    </div>

    <div class="p-4">
        <a href="{{ $masterclass->url }}" class="block text-center bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Learn More
        </a>
    </div>
</article>