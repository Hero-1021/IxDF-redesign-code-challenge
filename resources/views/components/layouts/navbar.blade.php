<nav class="hidden sm:block bg-white shadow-[0_8px_16px_rgba(106,106,106,0.10)] sticky top-0 z-50 py-1"
            aria-label="Main Navigation">
            <div class="bg-white">
                <div class="max-w-screen-lg mx-auto grid grid-cols-12 items-center">
                    <div class="col-span-12">
                        <div class="flex items-center justify-between py-1">
                            <div class="flex items-center gap-x-6">
                                <a href="https://www.interaction-design.org" title="Interaction Design Foundation logo"
                                    aria-label="Home" class="flex items-center">
                                    <picture>
                                        <source media="(min-width: 768px) and (max-width: 1055px)"
                                            srcset="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo.svg') }}">
                                        <img width="200" height="65" class="w-48 h-auto sm:w-44"
                                            src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo-full-expanded.svg') }}"
                                            alt="Interaction Design Foundation logo" />
                                    </picture>
                                </a>
                                <div class="hidden md:flex items-center space-x-6">
                                    <ul class="flex items-center space-x-4 font-sans">
                                        <li class="font-bold text-neutral-900 font-source">
                                            <span aria-current="page">UX Courses</span>
                                        </li>
                                        <li>
                                            <a href="https://www.interaction-design.org/master-classes"
                                                title="User Experience (UX) Master Classes"
                                                class="text-neutral-700 hover:text-brand-1 transition duration-200 font-source">
                                                Master Classes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.interaction-design.org/community"
                                                title="User Experience (UX) Community"
                                                class="text-neutral-700 hover:text-brand-1 transition duration-200 font-source">
                                                Community
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.interaction-design.org/literature"
                                                title="User Experience (UX) Literature"
                                                class="text-neutral-700 hover:text-brand-1 transition duration-200 font-source">
                                                Literature
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.interaction-design.org/blog"
                                                title="User Experience (UX) Blog"
                                                class="text-neutral-700 hover:text-brand-1 transition duration-200 font-source">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="hidden md:hidden">
                                        <input type="text" placeholder="Search..."
                                            class="w-64 px-4 py-2 border border-neutral-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:flex items-center space-x-4">
                                <div class="flex items-center space-x-4 ml-auto">
                                    <div class="flex items-center space-x-4">
                                        <ul class="flex items-center space-x-4 font-sans text-sm">
                                            <li>
                                                <a href="https://www.interaction-design.org/login"
                                                    class="text-neutral-700 hover:text-brand-1 no-underline transition duration-200 text-custom18">
                                                    Log in
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/join"
                                                    class="bg-brand-1 text-custom18 font-source leading-6 text-white font-bold ps-6 pe-4 py-3 rounded-md shadow-[0_2px_8px_rgba(106,106,106,0.40)] flex items-center space-x-1.5 hover:bg-blue-700 transition duration-200 custom-transition">
                                                    <span class="hidden xl:block">Join our community</span>
                                                    <span class="xl:hidden block">Join us</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                        class="w-5 h-5" fill="white">
                                                        <use xlink:href="#chevron-right-bold"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="hidden sm:block md:hidden bg-yellow-100 text-yellow-900 text-center py-2">
                <div
                    class="hidden bg-red-100 text-red-900 text-center font-sans py-3 px-4 sm:grid sm:grid-cols-12 sm:items-center">
                    <div class="col-span-12 px-4">
                        <div class="text-white font-bold flex items-center justify-center sm:justify-start"
                            role="status">
                            <div class="hidden sm:block text-sm text-white">
                                Please
                                <a href="https://updatemybrowser.org/browser" target="_blank"
                                    rel="noopener noreferrer nofollow"
                                    class="underline font-semibold hover:text-blue-300 transition duration-200">
                                    upgrade your browser
                                </a>
                                as it's outdated. You'll reduce security risks and help make the internet better.
                            </div>
                            <div class="block sm:hidden text-sm text-white">
                                Your browser is outdated—
                                <a href="https://updatemybrowser.org/browser" target="_blank"
                                    rel="noopener noreferrer nofollow"
                                    class="underline font-semibold hover:text-blue-300 transition duration-200">
                                    upgrade it now
                                </a>.
                            </div>
                            <button type="button"
                                class="shrink-0 ml-2 p-2 rounded-full bg-white text-neutral-700 hover:bg-neutral-200 transition duration-200"
                                data-page-announcement-close-button aria-label="Hide message">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5">
                                    <use xlink:href="#x"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </header>
        </nav>
        <div class="flex items-center justify-between bg-white px-4 py-3 shadow-md sm:hidden z-50 sticky top-0">
            <div class="flex items-center justify-between w-full">
                <button class="p-2 rounded-md bg-transparent hover:bg-neutral-200 transition duration-200">
                    <!-- Hamburger Icon (visible by default) -->
                    <span class="js-openSmallScreenMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-8 h-8">
                            <use xlink:href="#hamburger"></use>
                        </svg>
                        <span class="sr-only">Open menu</span>
                    </span>

                    <!-- Close Icon (hidden by default) -->
                    <span class="js-closeSmallScreenMenu hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-8 h-8">
                            <use xlink:href="#x"></use>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </span>
                </button>
                <div class="flex items-center">
                    <a href="/" title="Interaction Design Foundation" tabindex="-1">
                        <img src="resources/images/ixdf-logo-full-expanded.svg" alt="Interaction Design Foundation logo"
                            width="128" height="42" class="w-32 h-auto" />
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="/search"
                        class="flex items-center no-underline text-neutral-700 hover:text-brand-1 transition duration-200 js-modalSearchButton">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6">
                            <use xlink:href="#magnifying-glass"></use>
                        </svg>
                        <span class="sr-only">Search</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="/join"
                        class="bg-blue-600 text-white font-bold px-5 py-2 rounded-full hover:bg-blue-700 transition duration-200"
                        data-gtm-cta="headerButton">
                        Join us
                    </a>
                </div>


            </div>
        </div>
        <div
            class="fixed inset-0 z-50 w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out">
            <nav class="flex flex-col space-y-4 p-6 text-lg text-neutral-900"
                aria-label="Main Navigation for small screens">
                <ul class="flex flex-col space-y-4 font-sans">
                    <li class="font-bold text-blue-600">
                        <span aria-current="page">UX Courses</span>
                    </li>
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/master-classes"
                            title="User Experience (UX) Master Classes"
                            class="text-neutral-700 hover:text-brand-1 transition duration-200">
                            Master Classes
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/community"
                            title="User Experience (UX) Community"
                            class="text-neutral-700 hover:text-brand-1 transition duration-200">
                            Community
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/literature"
                            title="User Experience (UX) Literature"
                            class="text-neutral-700 hover:text-brand-1 transition duration-200">
                            Literature
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/blog"
                            title="User Experience (UX) Blog"
                            class="text-neutral-700 hover:text-brand-1 transition duration-200">
                            Blog
                        </a>
                    </li>

                </ul>
                <div>
                    <a href="/login"
                        class="border border-neutral-700 text-neutral-700 px-5 py-2 rounded-md hover:bg-neutral-700 hover:text-white transition duration-200">
                        Log in
                    </a>
                </div>
                <ul class="flex flex-col space-y-2 font-sans text-sm text-neutral-700">
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/turn-passion-into-paycheck"
                            class="hover:text-brand-1   transition duration-200">
                            Reviews / Why join our community?
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/corporate"
                            class="hover:text-brand-1  transition duration-200">
                            For companies
                        </a>
                    </li>
                    <li class="mt-2">
                        <a tabindex="-1" href="https://www.interaction-design.org/faq"
                            class="hover:text-brand-1  transition duration-200">
                            Frequently asked questions
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="https://www.interaction-design.org/about/contact"
                            class="hover:text-brand-1 transition duration-200">
                            Contact
                        </a>
                    </li>
                </ul>
                


            </nav>

        </div>