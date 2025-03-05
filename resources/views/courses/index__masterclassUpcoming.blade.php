@props(['masterclass'])

<article class="bg-white shadow-md rounded-xl p-6">
    <h3 class="text-xl font-bold">{{ $masterclass->title }}</h3>

    <div class="grid md:grid-cols-3 gap-6 mt-4">
        <div class="md:col-span-2 space-y-4">
            <div class="flex items-center space-x-4">
                @foreach($masterclass->speakers as $speaker)
                    <div class="w-10 h-10 rounded-full overflow-hidden">
                        <img src="{{ $speaker->picture_path }}" alt="Photo of {{ $speaker->name }}">
                    </div>
                    <div>
                        <strong>{{ $speaker->name }}</strong>, {{ $speaker->title }}
                    </div>
                @endforeach
            </div>
            
            <div class="relative max-h-32 overflow-hidden" x-data="{ expanded: false }">
                <div class="text-gray-700" x-show="expanded || $el.scrollHeight <= 128" x-html="@js($masterclass->description)"></div>
                <button @click="expanded = !expanded" class="text-blue-600 mt-2">
                    <span x-show="!expanded">Read full description</span>
                    <span x-show="expanded">Hide full description</span>
                </button>
            </div>
        </div>
        
        <div class="md:col-span-1 space-y-4">
            <a href="{{ $masterclass->url }}" class="block text-center bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Learn More
            </a>
            
            <div class="text-gray-600">
                <p>
                    <svg class="inline-block w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <use xlink:href="#calendar"></use>
                    </svg>
                    <time datetime="{{ $masterclass->start_at->toIso8601String() }}">
                        {{ $masterclass->start_at->format('l, F j, Y') }}
                    </time>
                </p>
                <p>
                    <svg class="inline-block w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <use xlink:href="#clock"></use>
                    </svg>
                    {{ $masterclass->start_at->format('h:i A (UTC P)') }}
                </p>
            </div>
        </div>
    </div>
</article>