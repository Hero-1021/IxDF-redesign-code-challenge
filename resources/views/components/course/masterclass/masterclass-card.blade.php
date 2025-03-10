
<div class="col-span-12 md:col-span-3 md:px-0">
        
            <div class="bg-white rounded-lg shadow-md relative col-span-12 md:col-span-3 md:px-0">
                <a href="{{ $masterclass->link }}"
                    class="text-1xl font-semibold text-white hover:underline absolute z-10 top-[39%] left-4 overflow-hidden">
                    {{ $masterclass->title }}
                </a>
                <div class="mt-4">
                    <img src="{{ $masterclass->picture_path }}"
                        class="w-full h-48 object-cover rounded-md" alt="">
                </div>
                <div class="pt-2 pb-4 px-4">
                <div class="mt-4 text-neutral-5 line-clamp-3">
                    {{ $masterclass->short_description }}
                </div>
                <div class="text-sm text-neutral-600 mt-2">By 
                    @foreach($masterclass->speakers as $speaker)
                        {{ $speaker->name }}
                    @endforeach
                </div>
            </div>
            <div class="">
                <a href="#"
                    class="bg-brand-1 text-white font-bold p-3 rounded-[0_0_8px_8px] flex items-center justify-center space-x-2 hover:bg-blue-700 transition duration-200">
                    <span>Learn more</span>
                    
                </a>
            </div>
    </div></div>