<?php
/**
 * @var \App\Models\Course $course
 */
?>

<div data-card
                        class="col-span-12 md:col-span-3  md:px-0 z-0 cursor-pointer bg-white rounded-lg shadow-md hover:shadow-lg transition duration-200 relative w-full"
                            title="{{ $course->title }}" data-course-id="80" data-schedule-id="9934"
                            data-close-timestamp="1742256000"
                            data-location-pathname="/courses/ai-for-designers">
                            <a href="/courses/ai-for-designers" data-gtm-click=""
                                class="text-xl font-bold text-neutral-900 hover:text-brand-1 transition duration-200 absolute top-[46%] left-4 z-10 text-white">
                                <h3>{{ $course->title }}</h3>
                            </a>
                            <div class="relative ">
                                <picture class="block h-[210px]">
                                    <source media="(max-width: 768px)"
                                        srcset="{{ $course->cover_image_path }}?tr=w-232,fo-auto">
                                    <source media="(min-width: 767px)"
                                        srcset="https://public-media.interaction-design.org/images/courses/hds/course_58--square_thumbnail.jpg?tr=w-464,fo-auto">
                                    <img src="{{ $course->cover_image_path }}?tr=fo-auto"
                                        class="w-full h-full object-cover object-top rounded-t-lg"
                                        alt="">
                                </picture>
                            
                            </div>
                            <div class="p-4 border-t border-neutral-300">
                                <div class="flex justify-between items-center">

                                    <!-- Countdown Timer -->
                                    <div class="flex pr-4 flex-col ">
                                        <div class="text-custonm18  font-source font-medium text-neutral-700">Closes in
                                        </div>
                                        <div class="text-xl font-bold text-red-600 flex items-center flex-col">
                                            <span class="text-2xl font-source">17</span>
                                            <span class="text-sm ml-1 font-source">days</span>
                                        </div>
                                    </div>

                                    <!-- Circular Progress Bar -->
                                    <div class="text-center">
                                        <div class="relative w-16 h-16">
                                            <svg class="w-full h-full" viewBox="0 0 65 65"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle class="text-gray-300" r="29" cx="50%" cy="50%"
                                                    fill="transparent" stroke="currentColor"
                                                    stroke-width="6">
                                                </circle>
                                                <circle class="text-blue-600" r="29" cx="50%" cy="50%"
                                                    fill="transparent" stroke="currentColor"
                                                    stroke-width="6" stroke-dasharray="182.12"
                                                    stroke-dashoffset="160.34">
                                                </circle>
                                            </svg>
                                            <div
                                                class="absolute inset-0 flex items-center justify-center text-sm font-bold text-blue-600">
                                                12%
                                            </div>
                                        </div>
                                        <div class="text-xs text-neutral-700 mt-1">booked</div>
                                    </div>

                                </div>
                            </div>
                            <div class="">
                                <a href="#"
                                    class="bg-brand-1 text-white font-bold px-6 py-3 rounded-[0_0_8px_8px] flex items-center justify-center space-x-2 hover:bg-blue-700 transition duration-200">
                                    <span>View Course</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="w-5 h-5" fill="white">
                                        <use xlink:href="#chevron-right-bold"></use>
                                    </svg>
                                </a>
                            </div>
                    </div>