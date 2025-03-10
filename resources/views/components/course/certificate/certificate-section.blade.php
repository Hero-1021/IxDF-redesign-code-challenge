<section class="grid lg:grid-cols-custom [grid-template-areas:'.content.'] w-full max-w-[100vw] grid-cols-1 px-4 lg:px-4 xl:px-0 bg-neutral-6 text-white py-16">
    <div class="md:[grid-area:content] w-full">
        <div class="md:grid flex flex-col md:grid-cols-12 grid-cols-1 gap-8 ">
        
        <!-- Image Section -->
        <div class="col-span-full w-full md:col-span-8">
            <picture>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/courses/certificate-example.jpg') }}" width="700" height="513"
                    class="mx-auto" alt="Course Certificate">
            </picture>
        </div>

        <!-- Text Section -->
        <div class="col-span-12 md:col-span-4 text-center md:text-left pl-4">
            <h2 class=" font-bold text-white text-[1.95rem] md:text-[2.2rem] leading-10">
                Gain Industry-Recognized UX Certificates
            </h2>
            <p class="mt-4 font-custom text-neutral-1">
                Use your certificates to make a life-changing shift into UX or stay ahead in your UX career.
                Salaries are among the highest in the world.
            </p>
            <p class="mt-4 font-custom text-neutral-1">
                185,910 members (and counting) have advanced their careers with us.
                See
                <a class="text-blue-400 hover:text-blue-300 transition duration-200 underline"
                    href="/turn-passion-into-paycheck">
                    reasons to join</a>.
            </p>
        </div>

    </div>
</section>