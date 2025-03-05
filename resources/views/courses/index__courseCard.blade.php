@props(['course'])

<div class="relative bg-white shadow-lg rounded-xl overflow-hidden border border-gray-200" title="{{ $course->title }}">
    <a href="/courses/{{ $course->slug }}" class="block">
        <h3 class="text-lg font-semibold p-4">{{ $course->title }}</h3>
    </a>

    <div class="relative">
        <picture>
            <source media="(max-width: 768px)" srcset="{{ $course->cover_image_path }}?tr=w-232,fo-auto">
            <source media="(min-width: 767px)" srcset="{{ $course->cover_image_path }}?tr=w-464,fo-auto">
            <img src="{{ $course->cover_image_path }}?tr=fo-auto" class="w-full h-48 object-cover" alt="{{ $course->title }}">
        </picture>
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white text-sm p-2 truncate w-full">{{ $course->title }}</div>
    </div>

    <div class="p-4 flex justify-between items-center">
        <div class="text-center">
            <div class="text-sm text-gray-600">Closes in</div>
            <div class="text-lg font-semibold">17 days</div>
        </div>
        
        <div class="relative w-12 h-12">
            <svg class="w-full h-full" viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg">
                <circle class="text-gray-300" r="29" cx="50%" cy="50%" fill="transparent" stroke-dasharray="182.12" stroke-dashoffset="0"></circle>
                <circle class="text-blue-500" r="29" cx="50%" cy="50%" fill="transparent" stroke-dasharray="182.12" stroke-dashoffset="160.34"></circle>
            </svg>
            <div class="absolute inset-0 flex items-center justify-center text-sm font-semibold">12%</div>
        </div>
    </div>

    <div class="p-4">
        <a href="/courses/{{ $course->slug }}" class="block text-center bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            View Course
        </a>
    </div>
</div>
