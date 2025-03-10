
<section class="grid lg:grid-cols-custom [grid-template-areas:'.content.'] w-full max-w-[100vw] grid-cols-1 px-4 lg:px-4 xl:px-0 bg-neutral-2 py-16">
<div class="md:[grid-area:content] w-full">
    <div class="grid grid-cols-12">
        @foreach($upcomingMasterclasses as $upcomingMasterclass)
            <x-course.masterclass.upcoming.upcoming-masterclass-card :masterclass="$upcomingMasterclass" />
        @endforeach
    </div>
</div>
</section>