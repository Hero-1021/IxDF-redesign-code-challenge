<?php
/**
 * @var \App\Models\Masterclass $masterclass
 */
?>
<div class="col-span-12">
            <h3 class="text-2xl md:text-[1.75rem] font-bold text-neutral-900 mt-[40px] mb-4">
            {{ $masterclass->title }}
            </h3>
        </div>

        <article class="col-span-12">                         

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Left Column (Speaker + Description) -->
                <div class="md:col-span-8">
                @foreach($masterclass->speakers as $speaker)
                    <div class="flex items-center space-x-4">
                        <!-- Speaker Image -->
                        <div class="w-10 h-10">
                            <img src="{{ $speaker->picture_path }}"
                                alt="Photo of Adam Thomas"
                                class="w-full h-full rounded-full object-cover">
                        </div>

                        <!-- Speaker Info -->
                        <div class="font-medium text-neutral-800">
                            <strong>{{ $speaker->name }}</strong>, {{ $speaker->title }}
                        </div>
                    </div>
                @endforeach

                    <!-- Collapsible Description -->
                    <div class="mt-4">
                        <div class="max-h-32 overflow-hidden transition-all duration-300">
                            <p class="text-neutral-700">
                            {!! $masterclass->description !!}
                            </p>
                        </div>

                        <!-- Read More Button -->
                        <div class="flex justify-center mt-2">
                            <button type="button"
                                class="text-brand-2 font-medium flex items-center justify-center">
                                <span class="mr-1">Read full description</span>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    class="w-4 h-4">
                                    <use xlink:href="#chevron-down"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Column (CTA + Countdown) -->
                <div class="md:col-span-4">
                    <!-- CTA Button -->
                    <a href="{{ $masterclass->link }}"
                        class="block w-full bg-brand-1 text-white font-bold py-3 rounded-lg text-center hover:bg-blue-700 transition duration-200">
                        Learn more
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="inline-block w-5 h-5 ml-2" fill="white">
                            <use xlink:href="#chevron-right-bold"></use>
                        </svg>
                    </a>

                    <!-- Countdown Timer -->
                    <div class="mt-8 mb-4 bg-neutral-100 rounded-lg flex items-center gap-2">
                        <div class="font-medium text-neutral-700">
                            Webinar starts in
                        </div>
                        <div class="flex justify-center space-x-4 mt-2">
                            <div class="flex flex-col items-center">
                                <span class="font-bold after:content-[''] after:block after:w-[1px] after:h-3 after:bg-neutral-6 relative after:absolute after:top-1.5 after:right-[-10px]">13</span>
                                <span class="text-xs text-neutral-600">days</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-bold after:content-[''] after:block after:w-[1px] after:h-3 after:bg-neutral-6 relative after:absolute after:top-1.5 after:right-[-10px]">03</span>
                                <span class="text-xs text-neutral-600">hrs</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-bold after:content-[''] after:block after:w-[1px] after:h-3 after:bg-neutral-6 relative after:absolute after:top-1.5 after:right-[-10px]">34</span>
                                <span class="text-xs text-neutral-600">mins</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-bold after:content-[''] after:block after:w-[1px] after:h-3 after:bg-neutral-6 relative after:absolute after:top-1.5 after:right-[-10px]">52</span>
                                <span class="text-xs text-neutral-600">secs</span>
                            </div>
                        </div>
                    </div>

                    <!-- Event Date & Time -->
                    <div class="mt-4 text-neutral-700 text-sm">
                        <p class="text-base md:text-custom18 font-custom text-neutral-5 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="#6a6a6a">
                                <use xlink:href="#calendar"></use>
                            </svg>
                            {{ $masterclass->start_at->format('l, F j, Y') }}
                        </p>
                        <p class="text-base md:text-custom18 font-custom text-neutral-5 flex items-center mt-2">
                            <svg class="w-5 h-5 mr-2" fill="#6a6a6a">
                                <use xlink:href="#clock"></use>
                            </svg>
                            {{ $masterclass->start_at->format('h:i A (\U\T\C P)') }}
                        </p>
                    </div>
                </div>
            </div>
        </article>