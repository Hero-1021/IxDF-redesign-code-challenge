<section class="grid lg:grid-cols-custom [grid-template-areas:'.content.'] w-full max-w-[100vw] grid-cols-1 px-4 lg:px-4 xl:px-0 bg-neutral-3 py-16">
    <div class="md:[grid-area:content] w-full">
        <div class="grid grid-cols-12 gap-4">
            
            <div class="col-span-12">
            <h2 class="mt-0 text-2xl font-bold text-neutral-900 mb-4 text-[1.95rem] md:text-[2.2rem] leading-10">Too Busy For a Full Course?</h2>
            <p class="text-neutral-700 mb-6 font-custom leading-6">
                Try our on-demand Master Classes instead! In just 60 minutes, you can learn directly from
                design experts about a variety of topics!
            </p> 
            <p class="text-neutral-700  mb-6 font-custom leading-6">
                Stay updated, stay inspired—even if you're short on time.
            </p>
            </div>
    @foreach($pastMasterclasses as $masterclass)
            
            <x-course.masterclass.masterclass-card :masterclass="$masterclass" />
        
    @endforeach
    
        
    </div>
        
    </div>
</section>