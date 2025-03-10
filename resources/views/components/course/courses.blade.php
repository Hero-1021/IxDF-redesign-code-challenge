<section class="grid lg:grid-cols-custom [grid-template-areas:'.content.'] w-full max-w-[100vw] grid-cols-1 px-4 lg:px-4 xl:px-0 bg-neutral-2 py-16">
    <div class="md:[grid-area:content] w-full">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <h2 id="beginner-courses" class="mt-0 text-[1.95rem] md:text-[2.2rem] leading-10 font-bold text-neutral-900 capitalize">
                    Choose your course
                </h2>
            </div>                           
                
                @foreach($courses as $course)
                <x-course.course-card :course="$course" />
                @endforeach
                                        
            </div>
    </div>
</section>