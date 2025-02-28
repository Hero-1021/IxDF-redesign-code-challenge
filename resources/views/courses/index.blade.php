<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UX Design Courses | Learn User Experience (UX) Design Online</title>
    <link rel="preconnect" href="https://public-media.interaction-design.org">
    <link rel="preconnect" href="https://public-images.interaction-design.org">
    <link rel="preconnect" href="https://assets.interaction-design.org">
    <link rel="preconnect" href="https://assets.interaction-design.org" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700|Source+Code+Pro|Source+Sans+Pro:400,400i,700&display=swap">
    @vite('resources/sass/legacy.css')
    @vite('resources/sass/course.css')

    <link rel="icon" type="image/png" sizes="48x48" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon--48.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon--32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon--16.png') }}">
    <link rel="icon" href="/favicon.ico" sizes="16x16" type="image/vnd.microsoft.icon">
    <meta name="apple-mobile-web-app-title" content="UX courses">
    <meta name="application-name" content="UX courses">
    <meta name="theme-color" content="#404040">
    <meta name="msapplication-config" content="/ms-app-browserconfig.xml"/>

    <meta property="fb:app_id" content="142481353231314"/>
    <meta property="fb:page_id" content="19975077227"/>
    <link rel="alternate" type="application/rss+xml" title="Interaction Design Foundation - UX Feed" href="https://www.interaction-design.org/rss/site_news.xml"/>
    <link rel="canonical" href="https://www.interaction-design.org/courses"/>
    <meta name="description" content="Online, self-paced UX Courses created by design experts. Join over 185, 910 students in the world&#039; s largest design school and gain recognized certificates."/>

    <meta property="og:type" content="product.group"/>
    <meta name="robots" content="max-image-preview:large">
    <meta property="og:site_name" content="The Interaction Design Foundation"/>
    <meta property="og:title" content="UX Design Courses"/>
    <meta property="og:description" content="Online, self-paced UX Courses created by design experts. Join over 185, 910 students in the world&#039; s largest design school and gain recognized certificates."/>
    <meta property="og:image" content="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo.svg') }}"/>
    <meta property="og:url" content="https://www.interaction-design.org/courses"/>

    <meta name="twitter:title" content="UX Design Courses"/>
    <meta name="twitter:description" content="Online, self-paced UX Courses created by design experts. Join over 185, 910 students in the world&#039; s largest design school and gain recognized certificates."/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@ixdf_org"/>
    <meta name="twitter:creator" content="@ixdf_org"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<div class="hidden icon-sprite-container" id="SVGSpriteWrap">
    @include('courses.index__icons', [])
</div>

<div class="pageContainer">
    <header data-secondary-navigation-header class="navigationHeader__secondaryNavigationBar sm:hide hide-print">
        <div class="gridContainer">
            <div class="gridContent">
                <ul class="inlineList navigationHeader__linksList" aria-label="Accessory navigation">
                    <li class="inlineList__item"><a tabindex="-1" href="https://www.interaction-design.org/turn-passion-into-paycheck">Reviews / Why join our community?</a></li>
                    <li class="inlineList__item"><a tabindex="-1" href="https://www.interaction-design.org/corporate">For companies</a></li>

                    <li class="inlineList__item inlineList__item--right"><a tabindex="-1" href="https://www.interaction-design.org/faq">Frequently asked questions</a></li>
                    <li class="inlineList__item"><a tabindex="-1" href="https://www.interaction-design.org/about/contact">Contact</a></li>

                </ul>
            </div>
        </div>
    </header>

    <nav class="navigationHeader js-navigationHeader sm:hide" aria-label="Main Navigation">
        <div class="navigationHeader__primaryNavigationBar gridContainer">
            <div class="gridContent">
                <div class="primaryNavigationBar">
                    <a class="primaryNavigationBar__logo" href="https://www.interaction-design.org" title="Interaction Design Foundation logo" aria-label="Home">
                        <picture>
                            <source media="(min-width: 768px) and (max-width: 1055px)" srcset="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo.svg') }}">
                            <img width="200" height="65" class="navigationHeaderLogo__image" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo-full-expanded.svg') }}"
                                 alt="Interaction Design Foundation logo"/>
                        </picture>
                    </a>

                    <div class="primaryNavigationBar__navigation">
                        <ul class="inlineList text-sans-serif">
                            <li class="navigationHeader__listItem">
                                <span class="navigationHeader__link font-bold" aria-current="page">UX Courses</span>
                            </li>
                            <li class="navigationHeader__listItem">
                                <a
                                        class="navigationHeader__link link--noUnderline link--animated"
                                        href="https://www.interaction-design.org/master-classes"
                                        title="User Experience (UX) Master Classes">Master Classes
                                </a>
                            </li>
                            <li class="navigationHeader__listItem">
                                <a
                                        class="navigationHeader__link link--noUnderline link--animated"
                                        href="https://www.interaction-design.org/community"
                                        title="User Experience (UX) Community">Community
                                </a>
                            </li>
                            <li class="navigationHeader__listItem">
                                <a
                                        class="navigationHeader__link link--noUnderline link--animated"
                                        href="https://www.interaction-design.org/literature"
                                        title="User Experience (UX) Literature">Literature
                                </a>
                            </li>
                            <li class="navigationHeader__listItem">
                                <a
                                        class="navigationHeader__link link--noUnderline link--animated"
                                        href="https://www.interaction-design.org/blog"
                                        title="User Experience (UX) Literature">Blog
                                </a>
                            </li>
                        </ul>
                        <div class="primaryNavigationBar__searchbar"></div>
                    </div>

                    <div class="primaryNavigationBar__accountDetails">
                        <div class="accountDetails accountDetails--isGuest accountDetails--right">
                            <div class="accountDetails__inner">
                                <ul class="text-sans-serif accountDetails__loginList inlineList">
                                    <li>
                                        <a href="https://www.interaction-design.org/login" class="link link--noUnderline accountDetails__login">
                                            Log in
                                        </a>
                                    </li>
                                    <li class="not-flexible">
                                        <a
                                                class="button button--primary button--withArrow"
                                                href="/join"
                                                data-gtm-cta="headerButton"
                                        >
                                            <span class="md:hide">Join our community</span>
                                            <span class="md:show">Join us</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon button__arrowIcon ml-tiny"
                                            >
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
        <header class="pageAnnouncements sm:hide">
            <div
                    data-page-announcement
                    data-importance="8"
                    style="margin: 0;"
                    data-dismissible-id="outdatedBrowser" class="gridContainer pageAnnouncement ui-type-style pageAnnouncement--vital hidden-on-supported-browsers"
            >
                <div class="gridContent">
                    <div class="pageAnnouncement__message text-neutral-01 flex justify-center text-left font-bold" role="status">
                        <div class="sm:hide">
                            Please <a href="https://updatemybrowser.org/browser" target="_blank" rel="noopener noreferrer nofollow">upgrade your browser</a>
                            as it's outdated. You'll reduce security risks and help make the internet better.
                        </div>
                        <div class="sm:show">
                            Your browser is outdated—<a href="https://updatemybrowser.org/browser" target="_blank" rel="noopener noreferrer nofollow">upgrade it now</a>.
                        </div>
                        <button type="button" class="pageAnnouncement__button shrink-0 ml-small" data-page-announcement-close-button aria-label="Hide message">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                 class="svg-icon pageAnnouncementButton__icon" width="20" height="20"
                            >
                                <use xlink:href="#x"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
    </nav>
    <div class="mobileHeader js-mobileHeader">

        <div class="mobileHeaderMainNav">
            <button class="btn-offcanvas js-openOffCanvas">
            <span class="js-openSmallScreenMenu">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                     class="svg-icon align-middle" width="32" height="32"
                >
    <use xlink:href="#hamburger"></use>
</svg>
                <span class="visually-hidden">Open menu</span>
            </span>
                <span class="js-closeSmallScreenMenu hidden">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                     class="svg-icon align-middle" width="32" height="32"
                >
    <use xlink:href="#x"></use>
</svg>
                <span class="visually-hidden">Close menu</span>
            </span>
            </button>

            <div class="mobileHeaderMainNav__logo">
                <a href="/" title="Interaction Design Foundation"
                   tabindex="-1">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo-full-expanded.svg') }}"
                         alt="Interaction Design Foundation logo"
                         width="128"
                         height="42"/>
                </a>
            </div>
            <div class="mobileHeaderMainNav__searchMenu">
                <a href="/search"
                   class="navigationHeader__link flex items-center link--noUnderline link--animated js-modalSearchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon" style="width: 22px; height: 22px;"
                    >
                        <use xlink:href="#magnifying-glass"></use>
                    </svg>
                    <span class="visually-hidden">Search</span>
                </a>
            </div>
            <div class="mobileHeaderMainNav__userMenu">
                <a
                        class="button button--primary"
                        href="/join"
                        data-gtm-cta="headerButton"
                >
                    Join us
                </a>
            </div>

        </div>
    </div>

    <div class="offCanvasWrapper">
        <nav class="offCanvasMenu" aria-label="Main Navigation for small screens">
            <ul class="offCanvasMenu__list text-sans-serif">
                <li class="navigationHeader__listItem">
                    <span class="navigationHeader__link font-bold" aria-current="page">UX Courses</span>
                </li>
                <li class="navigationHeader__listItem">
                    <a tabindex="-1"
                       class="navigationHeader__link "
                       href="https://www.interaction-design.org/master-classes"
                       title="User Experience (UX) Master Classes">Master Classes
                    </a>
                </li>
                <li class="navigationHeader__listItem">
                    <a tabindex="-1"
                       class="navigationHeader__link "
                       href="https://www.interaction-design.org/community"
                       title="User Experience (UX) Community">Community
                    </a>
                </li>
                <li class="navigationHeader__listItem">
                    <a tabindex="-1"
                       class="navigationHeader__link "
                       href="https://www.interaction-design.org/literature"
                       title="User Experience (UX) Literature">Literature
                    </a>
                </li>
                <li class="navigationHeader__listItem">
                    <a tabindex="-1"
                       class="navigationHeader__link "
                       href="https://www.interaction-design.org/blog"
                       title="User Experience (UX) Literature">Blog
                    </a>
                </li>

            </ul>

            <div class="offCanvas__loginButton">
                <a class="button button--ghostDark" href="/login">Log in</a>
            </div>

            <ul class="offCanvasMenu__list offCanvasMenu__list--links text-sans-serif">
                <li class="inlineList__item"><a tabindex="-1" href="https://www.interaction-design.org/turn-passion-into-paycheck">Reviews / Why join our community?</a></li>
                <li class="inlineList__item"><a tabindex="-1" href="https://www.interaction-design.org/corporate">For companies</a></li>

                <li class="inlineList__item inlineList__item--right"><a tabindex="-1" href="https://www.interaction-design.org/faq">Frequently asked questions</a></li>
                <li class="inlineList__item"><a tabindex="-1" href="https://www.interaction-design.org/about/contact">Contact</a></li>


            </ul>

            <div class="socialLinks justify-between flex-no-wrap">
                <a href="https://www.linkedin.com/company/ixdf-interaction-design-foundation"
                   target="_blank" rel="noopener" tabindex="-1" aria-label="LinkedIn page">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon fill-neutral-01" width="44" height="44"
                    >
                        <use xlink:href="#brand-linkedin"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/ixdf_org/"
                   target="_blank" rel="noopener" tabindex="-1" aria-label="Instagram page">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon fill-neutral-01" width="44" height="44"
                    >
                        <use xlink:href="#brand-instagram"></use>
                    </svg>
                </a>
                <a href="https://www.youtube.com/user/InteractionDesignOrg"
                   target="_blank" rel="noopener" tabindex="-1" aria-label="YouTube page">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon fill-neutral-01" width="44" height="44"
                    >
                        <use xlink:href="#brand-youtube"></use>
                    </svg>
                </a>
                <a href="https://x.com/ixdf_org"
                   target="_blank" rel="noopener" tabindex="-1" aria-label="X page">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon fill-neutral-01" width="44" height="44"
                    >
                        <use xlink:href="#brand-x"></use>
                    </svg>
                </a>
                <a href="https://www.facebook.com/ixdf.interaction.design.foundation"
                   target="_blank" rel="noopener" tabindex="-1" aria-label="Facebook page">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon fill-neutral-01" width="44" height="44"
                    >
                        <use xlink:href="#brand-facebook"></use>
                    </svg>
                </a>
            </div>
        </nav>
    </div>

    <main class="content-wrapper">
        <div class="alternateBackgroundContainer">
            <section class="gridContainer landingSection">
                <div class="gridContent">
                    <h1 class="mt-none mb-none">Learn UX Design and Grow Your Career</h1>
                    <section class="mt-large">
                        <div class="row">
                            <div class="col-md-7">
                                <video id="video-813" preload="none" controls controlslist="nodownload"
                                       poster="https://public-media.interaction-design.org/images/course/poster/idf-user-experience-courses-promo.1631615301.jpg?tr=w-1127" crossorigin>
                                    <source src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-1080p.mp4" type="video/mp4" size="1080">
                                    <source src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-720p.mp4" type="video/mp4" size="720">
                                    <source src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-480p.mp4" type="video/mp4" size="480">
                                    <source src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-1080p.webm" type="video/webm" size="1080">
                                    <source src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-720p.webm" type="video/webm" size="720">
                                    <source src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-480p.webm" type="video/webm" size="480">
                                    <track src="https://www.interaction-design.org/tv/course_videos/v2/idf-user-experience-courses-promo-en.vtt" srclang="en">
                                </video>
                            </div>

                            <div class="col-md-5">
                                <ul class="list">
                                    <li>
                                        Take all our online courses. Pay a flat fee.
                                    </li>
                                    <li>
                                        Get industry-recognized Course Certificates
                                    </li>
                                    <li>Self-paced: never miss a class or deadline.</li>
                                    <li>Specialized in design—that's why the industry trusts us.</li>
                                </ul>

                                <a
                                        class="button button--primary button--withArrow"
                                        href="/join"
                                        data-gtm-cta="coursesPageHeroButton"
                                >
                                    Start learning now
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         class="svg-icon button__arrowIcon ml-tiny"
                                    >
                                        <use xlink:href="#chevron-right-bold"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </section>
                </div>
            </section>

            <section class="gridContainer landingSection" id="learningPath">
                <div class="gridContent">
                    <div class="centeredSmallContainer">
                        <h2 class="mt-none">Don't Know Where to Start?</h2>

                        <div class="select--large">
                            <form method="GET">
                                <select id="learningPathName"
                                        name="learning-path"
                                        class="course__learningPath"
                                        aria-label="List of learning paths">
                                    <option value="">Get a learning path…</option>
                                    <option value="ux-design">UX Designer</option>
                                    <option value="ui-design">UI Designer</option>
                                    <option value="fe-dev">Front end developer</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gridContainer landingSection">
                <div class="gridContent">
                    <h2 class="mt-none capitalize" id="beginner-courses">Choose your course</h2>
                    <div data-cards-list class="row course__cardsSection">
                        @foreach($courses as $course)
                            <div data-card class="card-wrapper col-lg-3 col-md-4">
                                @include('courses.index__courseCard', ['course' => $course])
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section data-show-limited-cards class="gridContainer landingSection">
                <div class="gridContent">
                    <h2 class="mt-none">Too Busy For a Full Course?</h2>
                    <p class="max-w-full">
                        Try our on-demand Master Classes instead! In just 60 minutes, you can learn directly from design experts
                        about a variety of topics!
                    </p>
                    <p class="max-w-full">Stay updated, stay inspired—even if you're short on time.</p>

                    <div data-cards-list class="row course__cardsSection course__cardSection--masterclass">
                        @foreach($pastMasterclasses as $masterclass)
                            <div data-card class="card-wrapper col-lg-3 col-md-4">
                                @include('courses.index__masterclassCard', ['masterclass' => $masterclass])
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="landingSection gridContainer">
                <div class="gridContent">
                    <h2 class="mt-none">Upcoming Live Master Classes</h2>

                    @foreach($upcomingMasterclasses as $upcomingMasterclass)
                        @include('courses.index__masterclassUpcoming', ['masterclass' => $upcomingMasterclass])
                    @endforeach

                </div>
            </section>
        </div>

        <section class="landingSection gridContainer background-neutral-06 text-neutral-01">
            <div class="gridContent row">
                <div class="col-lg-8 col-md-7 media__image">
                    <picture>
                        <img
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/courses/certificate-example.jpg') }}"
                                width="700"
                                height="513"
                                class="block-center elevation-tropo"
                                alt="Course Certificate">
                    </picture>
                </div>

                <div class="col-lg-4 col-md-5 media__body homepage__industryTrustedText--reverseOrder">
                    <h2 class="mt-none text-neutral-01">
                        Gain Industry-Recognized UX Certificates
                    </h2>
                    <p>
                        Use your certificates to make a life-changing shift into UX or stay ahead in your UX career.
                        Salaries are among the highest in the world.
                    </p>
                    <p>
                        185,910 members (and counting) have advanced their careers with us.
                        See <a class="link--darkBackground" href="/turn-passion-into-paycheck">reasons&nbsp;to&nbsp;join</a>.
                    </p>
                </div>
            </div>
        </section>
        <div class="alternateBackgroundContainer">

            <section class="gridContainer landingSection">
                <div class="gridContent">
                    <div class="centeredSmallContainer">
                        <h2 class="mt-none">How It Works</h2>
                        <ol class="steps mb-none">
                            <li class="steps__item ">
                                <div class="steps__headingLine">
                                    <span class="steps__heading">Take online courses by industry experts</span>
                                </div>
                                <div class="stepsItem__content ">
                                    <p class="mb-none">
                                        Lessons are self-paced so you'll never be late for class or miss a deadline.
                                    </p>
                                </div>
                            </li>
                            <li class="steps__item ">
                                <div class="steps__headingLine">
                                    <span class="steps__heading">Get a Course Certificate</span>
                                </div>
                                <div class="stepsItem__content ">
                                    <p class="mb-none">
                                        Your answers are graded by experts, not machines. Get an industry-recognized Course Certificate to prove
                                        your skills.
                                    </p>
                                </div>
                            </li>
                            <li class="steps__item ">
                                <div class="steps__headingLine">
                                    <span class="steps__heading">Advance your career</span>
                                </div>
                                <div class="stepsItem__content ">
                                    <p class="mb-none">
                                        Use your new skills in your existing job or to get a new job in UX design. Get help from our community.
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <section class="landingSection">
                <section class="gridContainer  ">
                    <div class="gridContent ">
                        <section id="courseintro">
                            <h2 class="mt-none">Frequently Asked Questions</h2>

                            <accordion-list role="list">
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Why are <strong>design skills so important</strong> right now?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="why-are-design-skills-so-important-right-now" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Design skills are incredibly valuable for both you personally and for your company.</p>
                                            <p><strong>For you personally</strong>, design skills are important because:</p>
                                            <ul>
                                                <li><p>Salaries for people who learn design are soaring, <strong>surpassing $200K</strong> in cities like San Francisco, with global <strong>job growth rates at
                                                            13%</strong>.</p></li>
                                                <li><p>Many of your <strong>job competitors</strong> already possess design skills. When you enhance your design skills you can significantly elevate your personal brand
                                                        and <strong>make you a more attractive candidate</strong>.</p></li>
                                                <li><p>You learn skills that <strong>protect you from losing your job to AI</strong>.</p></li>
                                                <li><p>You can <strong>ignite your passion</strong> through design and leverage it to make a <strong>meaningful impact</strong>.</p></li>
                                            </ul>
                                            <p><strong>For your company</strong>, design skills are important because:</p>
                                            <ul>
                                                <li><p>Your design skills can help <strong>increase sales</strong>, <strong>keep customers loyal,</strong> and turn them into <strong>powerful advocates</strong> of your
                                                        company. That's because design is all about helping people reach their goals and meet their needs.&nbsp;</p></li>
                                                <li><p>Companies that invest in design <strong>outperform the S&amp;P 500 Index</strong> by a whopping 228%.</p></li>
                                                <li><p>Design goes way beyond creating attractive visuals and aesthetics. When you possess design skills you're equipped to <strong>revolutionize businesses</strong>, make
                                                        technology more <strong>user-friendly</strong>, and innovate customer experiences and systems.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                I'm not a designer. <strong>Why should I learn design</strong> and tech?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="im-not-a-designer-why-should-i-learn-design-and-tech" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Design and tech skills can make you an <strong>indispensable asset</strong> to your company and open up <strong>career opportunities</strong>.</p>
                                            <p>For example, if you're in a field such as:</p>
                                            <ul>
                                                <li><p>Marketing, Communication and HR</p></li>
                                                <li><p>Software Development</p></li>
                                                <li><p>Customer Service</p></li>
                                                <li><p>Business</p></li>
                                                <li><p>Psychology</p></li>
                                                <li><p>Project Management</p></li>
                                                <li><p>Architecture</p></li>
                                                <li><p>Content Creation&nbsp;</p></li>
                                                <li><p>Healthcare</p></li>
                                                <li><p>Teaching</p></li>
                                                <li><p>And other fields</p></li>
                                            </ul>
                                            <p>Why can design skills make you valuable in all these jobs and industries?</p>
                                            <p>That's because design skills are incredibly valuable for both you personally and for your company.</p>
                                            <p><strong>For you personally</strong>, design skills are important because:</p>
                                            <ul>
                                                <li><p>Salaries for people who learn design are soaring, <strong>surpassing $200K</strong> in cities like San Francisco, with global <strong>job growth rates at
                                                            13%</strong>.</p></li>
                                                <li><p>Many of your <strong>job competitors</strong> already possess design skills. When you enhance your design skills you can significantly elevate your personal brand
                                                        and <strong>make you a more attractive candidate</strong>.</p></li>
                                                <li><p>You learn skills that <strong>protect you from losing your job to AI</strong>.</p></li>
                                                <li><p>You can <strong>ignite your passion</strong> through design and leverage it to make a <strong>meaningful impact</strong>.</p></li>
                                            </ul>
                                            <p><strong>For your company</strong>, design skills are important because:</p>
                                            <ul>
                                                <li><p>Your design skills can help <strong>increase sales</strong>, <strong>keep customers loyal,</strong> and turn them into <strong>powerful advocates</strong> of your
                                                        company. That's because design is all about helping people reach their goals and meet their needs.&nbsp;</p></li>
                                                <li><p>Companies that invest in design <strong>outperform the S&amp;P 500 Index</strong> by a whopping 228%.</p></li>
                                                <li><p>Design goes way beyond creating attractive visuals and aesthetics. When you possess design skills you're equipped to <strong>revolutionize businesses</strong>, make
                                                        technology more <strong>user-friendly</strong>, and innovate customer experiences and systems.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                How can design skills protect me from <strong>losing my job to AI</strong>?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="how-can-design-skills-protect-me-from-losing-my-job-to-ai" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>AI is killing jobs in all industries. Humanity has never faced such a <strong>powerful force, developing at an exponential speed</strong>.</p>
                                            <p>You can <strong>protect yourself by learning design</strong>: You'll use the very fabric of being human, like empathy and intuition. AI never can never replace that. These
                                                skills are timeless and will stay with you forever.</p>
                                            <p><strong>Design is centered on human needs and goals</strong>. That's why you can protect your future with the power of human-centered design. Mastering these skills can
                                                <strong>shield you from AI-driven disruptions</strong>. </p>
                                            <p>We'll even teach you how to use AI as your career helper, not your terminator.</p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Do I need any <strong>prior experience in design</strong> or tech?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="do-i-need-any-prior-experience-in-design-or-tech" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Good news! </p>
                                            <p>You don't need any prerequisites or prior experience in design or tech. We've crafted the learning experience to ensure your success and real career outcomes, regardless of
                                                your age or background.</p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                When I pay for an IxDF course, <strong>what do I get?</strong>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="when-i-pay-for-an-ixdf-course-what-do-i-get" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>You get <strong>unlimited</strong> access to <strong>all</strong> IxDF courses at no extra cost. Take as many courses as you want without paying extra.</p>
                                            <p>In addition, you get:</p>
                                            <ul>
                                                <li><p>Courses by <strong>real experts</strong>, not influencers.</p></li>
                                                <li><p>Industry-recognized IxDF Course Certificates to build your <strong>credibility and salary potential</strong>.</p></li>
                                                <li><p><strong>Full flexibility</strong> in how you learn: Effortlessly while <strong>on your sofa</strong> or on a park bench during the weekend.</p></li>
                                                <li><p>Skills that <strong>protect you from losing your job to AI</strong>.</p></li>
                                                <li><p><strong>Downloadable templates</strong> to instantly apply your new real-world skills and <strong>help your projects succeed</strong>.</p></li>
                                                <li><p>An easy way to <strong>compile an impressive portfolio</strong>.</p></li>
                                                <li><p>Instant help and career advice in IxDF online global communities. <strong>Your network is your net worth</strong>.</p></li>
                                                <li><p>Full access to IxDF Local Groups where you can <strong>build your network</strong>, <strong>find your next job</strong>, have fun and learn from your peers. The
                                                        meetings are completely optional and are spread across over 500 cities worldwide.&nbsp;</p></li>
                                                <li><p>Get our insights, present them as your own.</p></li>
                                                <li><p><strong>Grading by experts</strong>, not machines.&nbsp;</p></li>
                                                <li><p>Access on all devices. <strong>100% online</strong>.&nbsp;</p></li>
                                                <li><p><strong>Permanent access</strong> to course material during membership.</p></li>
                                                <li><p>Downloadable <strong>premium literature</strong> by 100+ leading designers.</p></li>
                                                <li><p>Discounts on design tools.</p></li>
                                                <li><p><strong>1-hour Master Classes</strong> by global design leaders to <strong>fast-track your growth</strong>. Binge-watch them on-demand from your sofa. Stay updated,
                                                        stay inspired.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Can I <strong>work full-time</strong> while I take a course?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="can-i-work-full-time-while-i-take-a-course" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Absolutely! You'll <strong>always have time</strong> for career growth because our self-paced courses are designed to <strong>fit seamlessly into your life</strong>. You'll
                                                never have to say, “I don't have time for that”. </p>
                                            <p>You can learn at <strong>your own comfortable pace</strong>. Anytime and anywhere, whether you're working full-time or juggling life and kids. </p>
                                            <p>Many IxDF learners effortlessly enjoy our courses during their commute, while <strong>relaxing on their sofa</strong>, or even on a park bench during the weekend. </p>
                                            <p>Dive in whenever it suits you and progress at a speed that <strong>feels just right for you</strong>. </p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Will I receive a <strong>Certificate</strong>?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="will-i-receive-a-certificate" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Yes! After you finish, you'll receive an <strong>industry-recognized IxDF Certificate</strong>.</p>
                                            <p>Use your IxDF Certificates to increase your credibility and salary potential. Your employer and clients will trust you when you can prove that you've learned from the
                                                best.</p>
                                            <p>Be in distinguished company, alongside industry leaders who train their teams with the IxDF and trust IxDF Certificates.</p>
                                            <p>Add IxDF Certificates to your LinkedIn profile, resumé and job application in <a href="https://www.interaction-design.org/faq/add-ixdf-course-certificate-to-linkedin">a few
                                                    easy steps</a>.</p>
                                            <figure>
                                                <video class="video-gif" src="https://public-images.interaction-design.org/faq/questions/share-certificates-linkedIn.mp4" autoplay="true" muted="true" loop="true"
                                                       playsinline></video>
                                            </figure>
                                            <p>You can download your certificates as .jpg files, so they are easy to share. Certificates are always valid.</p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                How are <strong>courses graded</strong>?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="how-are-courses-graded-1" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Unlike any other online course platform we know of, <strong>our grading is done by experts</strong>, not machines. </p>
                                            <p>We're not one of those generic, "cover-it-all" course platforms, packed with poorly produced videos on endless topics.</p>
                                            <p>Our experts ensure you receive feedback and <strong>maximum benefit</strong> from the entire process. </p>
                                            <p>That's also one of the reasons IxDF Course Certificates are <strong>credible and industry-recognized</strong>.</p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Can I take <strong>more than one course</strong> at a time?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="can-i-take-more-than-one-course-at-a-time-2" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Yes! You get <strong>unlimited</strong> access to <strong>all</strong> IxDF courses at no extra cost. </p>
                                            <p>For example, if there are 40 courses open for enrollment, you can enroll in all 40 courses at the same time and move from one to another as you prefer. Use our IxDF Career
                                                Programs to help you choose the very best courses for you.</p>
                                            <p>If you're a <strong>student member</strong>, you can take a maximum of two courses at the same time. You can still take as many courses as you would like – free of extra
                                                charges – just as long as you finish them so that you don't have more than two ongoing courses. </p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Are all the courses really <strong>free for members</strong>?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="are-all-the-courses-really-free-for-members" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Yes! You get <strong>unlimited</strong> access to <strong>all</strong> IxDF courses at no extra cost. Take as many courses as you want without paying extra.</p>
                                            <p>As a member you get:</p>
                                            <ul>
                                                <li><p>Courses by <strong>real experts</strong>, not influencers.</p></li>
                                                <li><p>Industry-recognized IxDF Course Certificates to build your <strong>credibility and salary potential</strong>.</p></li>
                                                <li><p><strong>Full flexibility</strong> in how you learn: Effortlessly while <strong>on your sofa</strong> or on a park bench during the weekend.</p></li>
                                                <li><p>Skills that <strong>protect you from losing your job to AI</strong>.</p></li>
                                                <li><p><strong>Downloadable templates</strong> to instantly apply your new real-world skills and <strong>help your projects succeed</strong>.</p></li>
                                                <li><p>An easy way to <strong>compile an impressive portfolio</strong>.</p></li>
                                                <li><p>Instant help and career advice in IxDF online global communities. <strong>Your network is your net worth</strong>.</p></li>
                                                <li><p>Full access to IxDF Local Groups where you can <strong>build your network</strong>, <strong>find your next job</strong>, have fun and learn from your peers. The
                                                        meetings are completely optional and are spread across over 500 cities worldwide.&nbsp;</p></li>
                                                <li><p>Get our insights, present them as your own.</p></li>
                                                <li><p><strong>Grading by experts</strong>, not machines.&nbsp;</p></li>
                                                <li><p>Access on all devices. <strong>100% online</strong>.&nbsp;</p></li>
                                                <li><p><strong>Permanent access</strong> to course material during membership.</p></li>
                                                <li><p>Downloadable <strong>premium literature</strong> by 100+ leading designers.</p></li>
                                                <li><p>Discounts on design tools.</p></li>
                                                <li><p><strong>1-hour Master Classes</strong> by global design leaders to <strong>fast-track your growth</strong>. Binge-watch them on-demand from your sofa. Stay updated,
                                                        stay inspired.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                How do I add the IxDF Certificate to my <strong>LinkedIn profile</strong>?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="how-do-i-add-the-ixdf-certificate-to-my-linkedin-profile" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p><strong>That's easy</strong>! You can use your IxDF Certificates to increase your credibility and salary potential. Your employer and clients will trust you when you can
                                                prove that you've learned from the best.</p>
                                            <figure>
                                                <video class="video-gif" src="https://public-images.interaction-design.org/faq/questions/share-certificates-linkedIn.mp4" autoplay="true" muted="true" loop="true"
                                                       playsinline></video>
                                            </figure>
                                            <p>Add your IxDF Certificates to your LinkedIn profile, resumé and job application in <strong>a few easy steps</strong>:</p>
                                            <ol>
                                                <li><p>Click “Add profile section” on your LinkedIn</p></li>
                                                <li><p>Tap “Recommended”&nbsp;&nbsp;</p></li>
                                                <li><p>Select “Add licenses or certifications”</p></li>
                                                <li><p>Enter your IxDF Certificate details</p></li>
                                                <li><p>Hit “Save”&nbsp;</p></li>
                                            </ol>
                                            <p>You can download your IxDF Certificates as .jpg files, so they are easy to share. IxDF Certificates are always valid.</p>
                                            <p></p>
                                            <h2>Need more detailed instructions?</h2>
                                            <ul>
                                                <li><p>Learn <a href="https://www.interaction-design.org/faq/add-ixdf-membership-certificate-to-linkedin">how to add your IxDF Membership Certificate to LinkedIn</a>.</p>
                                                </li>
                                                <li><p>Learn <a href="https://www.interaction-design.org/faq/add-ixdf-master-class-certificate-to-linkedin">how to add your IxDF Master Class Certificate to LinkedIn</a>.
                                                    </p></li>
                                                <li><p>Learn <a href="https://www.interaction-design.org/faq/add-ixdf-course-certificate-to-linkedin">how to add your IxDF Course Certificate to LinkedIn</a>.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                I missed the enrollment, and now <strong>the course is closed</strong>. What can I do?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="i-missed-the-enrollment-and-now-the-course-is-closed-what" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Don't worry, we will re-run the course soon. </p>
                                            <p>One reason we open and close courses is to achieve <strong>an optimal classroom size</strong>. That way, your <strong>networking opportunities and learning experience are
                                                    optimal</strong>. </p>
                                            <p>We display the "XX% booked" status on our courses to be <strong>transparent</strong> about the course availability.</p>
                                            <p>Stay tuned for the next enrollment period. Be sure to <strong>sign up early</strong>! Meanwhile, you can sign up for another course you find interesting. Remember, you can
                                                take <strong>as many courses as you want</strong> without paying extra.</p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                Are IxDF courses suitable for <strong>beginners or advanced</strong> learners?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="are-ixdf-courses-suitable-for-beginners-or-advanced-learners" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>Our courses cater to all levels, <strong>from beginners to advanced</strong> professionals.</p>
                                            <p>People who take this course come from diverse backgrounds:</p>
                                            <ul>
                                                <li><p>Marketing, Communication and HR</p></li>
                                                <li><p>Software Development</p></li>
                                                <li><p>Customer Service</p></li>
                                                <li><p>Business</p></li>
                                                <li><p>Psychology</p></li>
                                                <li><p>Project Management</p></li>
                                                <li><p>Architecture</p></li>
                                                <li><p>Content Creation&nbsp;</p></li>
                                                <li><p>Healthcare</p></li>
                                                <li><p>Teaching</p></li>
                                                <li><p>And other fields</p></li>
                                            </ul>
                                            <p>No matter your experience level, you'll find courses that help you grow and achieve your goals.</p>
                                            <p>If you're interested in design and tech, mastering new design and tech skills can increase your salary potential, make you an <strong>indispensable asset</strong> to your
                                                company and open up numerous career opportunities.</p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                How can the global and local <strong>IxDF community help me?</strong>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="how-can-the-global-and-local-ixdf-community-help-me" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>We can help you in several ways. </p>
                                            <p><strong>Join meet-ups in your city</strong>: Join the regular meet-ups in your city in a nearby cafe or office building to have fun and learn with people just like you. You
                                                get full access to IxDF Local Groups where you can <strong>build your network</strong>, <strong>find your next job</strong>, <strong>enjoy</strong> yourself and learn from
                                                your peers. The meetings are completely optional and are spread across over 500 cities worldwide. <strong>Your network is your net worth</strong>.</p>
                                            <p><strong>Get instant help and career advice in IxDF online global communities</strong>. <strong>Build your global network</strong> through the supportive IxDF community. Earn
                                                IxDF Distinctions like “Community Influencer'' and “Social Impact Award”. </p>
                                            <p>Learn from global leaders and build your network and job opportunities <strong>locally and globally</strong>. </p>
                                        </div>
                                    </div>
                                </details>
                                <details class="accordionList__item overflow-hidden" role="listitem">
                                    <summary class="summary--noStyle">
                                        <div class="accordionItem__titleContent">
                                            <div class="accordionItem__title ui-type-style m-none">
                                                What if I have <strong>more questions</strong>?
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 class="svg-icon accordionItem__chevron"
                                            >
                                                <use xlink:href="#chevron-down"></use>
                                            </svg>
                                        </div>
                                    </summary>
                                    <div class="accordionItem__content js-accordionItem__content ">
                                        <div id="what-if-i-have-more-questions" class="rteContent rteContent--bodyLineHeight rteContent--imageFit">
                                            <p>We'd love to hear from you and help you!</p>
                                            <p>Reach out to us at hello@interaction-design.org or use <a href="https://www.interaction-design.org/about/contact">the online contact form</a>.</p>
                                        </div>
                                    </div>
                                </details>
                            </accordion-list>

                        </section>
                    </div>
                </section>
            </section>

        </div>
    </main>

    <footer class="footer hide-print">

        <h2 class="visually-hidden">Footer navigation</h2>

        <div class="gridContainer">
            <div class="gridContent">

                <div class="footer__inner">
                    <div class="text-center">
                        <img class="footer__logo" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/ixdf-logo-full-inverse.svg') }}"
                             alt="Interaction Design Foundation Logo" width="320" height="110">
                        <div class="row mt-none mb-large">
                            <p class="centeredSmallContainer mt-medium text-left">
                                With 185,910 graduates, the Interaction Design Foundation is the biggest
                                online design school globally. We were founded in 2002.
                            </p>
                        </div>
                    </div>

                    <div class="footer__separator"></div>

                    <div class="row mb-large">
                        <div class="col-md-6">
                            <h3>Connect With Us</h3>
                            <p>
                                Reach us at <a href="mailto:hello@interaction-design.org">hello@interaction-design.org</a>
                                or through our
                                <a class="whitespace-no-wrap" href="/about/contact"
                                   title="Contact the Interaction Design Foundation"
                                >online contact form</a>.
                            </p>

                            <div class="socialLinks socialLinks--white ">
                                <a class="socialLinks__item" href="https://www.linkedin.com/company/ixdf-interaction-design-foundation" target="_blank" rel="noopener noreferrer">
                                    <span class="visually-hidden">LinkedIn page</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         class="svg-icon" width="32" height="32"
                                    >
                                        <use xlink:href="#brand-linkedin"></use>
                                    </svg>
                                </a>
                                <a class="socialLinks__item" href="https://www.instagram.com/ixdf_org/" target="_blank" rel="noopener noreferrer">
                                    <span class="visually-hidden">Instagram page</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         class="svg-icon" width="32" height="32"
                                    >
                                        <use xlink:href="#brand-instagram"></use>
                                    </svg>
                                </a>
                                <a class="socialLinks__item" href="https://www.youtube.com/user/InteractionDesignOrg" target="_blank" rel="noopener noreferrer">
                                    <span class="visually-hidden">YouTube page</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         class="svg-icon" width="32" height="32"
                                    >
                                        <use xlink:href="#brand-youtube"></use>
                                    </svg>
                                </a>
                                <a class="socialLinks__item" href="https://x.com/ixdf_org" target="_blank" rel="noopener noreferrer">
                                    <span class="visually-hidden">X page</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         class="svg-icon" width="32" height="32"
                                    >
                                        <use xlink:href="#brand-x"></use>
                                    </svg>
                                </a>
                                <a class="socialLinks__item" href="https://www.facebook.com/ixdf.interaction.design.foundation" target="_blank" rel="noopener noreferrer">
                                    <span class="visually-hidden">Facebook page</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         class="svg-icon" width="32" height="32"
                                    >
                                        <use xlink:href="#brand-facebook"></use>
                                    </svg>
                                </a>
                            </div>

                            <p class="connectWithUs__faq">
                                Have questions? Check our <a href="/faq">frequently&nbsp;asked&nbsp;questions</a>.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h3>Get Inspired Weekly</h3>
                            <p>
                                Join <span
                                        class="js-subscriberCount">315,092</span>
                                designers and get
                                <a class="whitespace-no-wrap" href="/newsletter"
                                   title="Design Tips">weekly inspiration and design tips</a> in your inbox.
                            </p>

                            <form method="POST" data-test="newsletterSubscription" class="form"
                                  name="newsletter-subscription-form"
                                  action="https://www.interaction-design.org/newsletter/subscribe">
                                <input type="hidden" name="_token" value="secret" autocomplete="off"> <label class="hidden" aria-hidden="true">Name
                                    <input type="text" name="name" value="" aria-hidden="true" autocomplete="off">
                                </label>
                                <input type="hidden" name="list_id"
                                       value="1">
                                <div class="form__field">
                                    <div class="inputGroup">
                                        <label for="email-for-newsletter-subscription" class="visually-hidden">Email</label>
                                        <input name="email" type="email" id="email-for-newsletter-subscription"
                                               placeholder="Your email" autocomplete="off" title="Subscription form"
                                               required maxlength="100"/>


                                        <div class="inputGroup__addon inputGroup__addon--noBorder"
                                             style="margin-left: -5px; border-radius: var(--border-radius-large)">
                                            <button type="submit" class="button button--primary"
                                                    style="border-radius: 0 var(--border-radius-large) var(--border-radius-large) 0">
                                                Subscribe
                                            </button>
                                        </div>
                                    </div>
                                    <small class="error">Please write a valid email address.</small>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="footer__separator footer__bottomSpacer"></div>

                    <h3 class="mt-small">Browse UX / UI Design Topics</h3>
                    <nav class="topicNavigator mb-huge">
                        <div class="topicNavigator__list">
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#A">A</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#B">B</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#C">C</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#D">D</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#E">E</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#F">F</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#G">G</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#H">H</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#I">I</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                >J</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#K">K</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#L">L</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#M">M</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#N">N</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#O">O</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#P">P</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#Q">Q</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#R">R</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#S">S</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#T">T</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#U">U</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#V">V</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#W">W</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                >X</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                >Y</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                >Z</a>
                            </div>
                            <div class="topicNavigator__listItem">
                                <a class="topicNavigator__link"
                                   href="https://www.interaction-design.org/literature/topics#other">#</a>
                            </div>
                        </div>
                    </nav>

                    <div class="footer__separator footer__bottomSpacer"></div>
                    <div class="row footer__sitemapLinks">
                        <div class="col-md-3">
                            <h3 class="mt-none">UX Courses</h3>
                            <ul class="list-none pl-none genericList__listItem--onDarkBackground">
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/courses#beginner-courses">

                                        Beginner UX Courses

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/courses#intermediate-courses">

                                        Intermediate UX Courses

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/courses#advanced-courses">

                                        Advanced UX Courses

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3 class="mt-none">Community</h3>
                            <ul class="list-none pl-none genericList__listItem--onDarkBackground">
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/master-classes">

                                        Master Classes

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/community">

                                        Local Groups

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/conversations">

                                        Conversations

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3 class="mt-none">Literature</h3>
                            <ul class="list-none pl-none genericList__listItem--onDarkBackground">
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/literature/article/overview">

                                        UX Daily Articles

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/literature/topics">

                                        UX Topics

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/literature/book/overview">

                                        UX Books

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3 class="mt-none">About</h3>
                            <ul class="list-none pl-none genericList__listItem--onDarkBackground">
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/about">

                                        About Us

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/about/people-behind">

                                        The People Behind

                                    </a>
                                </li>
                                <li class="genericList__listItem  genericList__listItem--link ">

                                    <a class="linkStrip__link" href="/about/contact">

                                        Contact Us

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer__links gridContainer">
            <div class="gridContent">
                <ul class="inlineList footerLinks__list text-small">
                    <li class="footerLinks__listItem"><a href="/about/terms-of-use">Terms of Use / Privacy</a></li>
                    <li class="footerLinks__listItem"><a href="/corporate">For companies</a></li>
                    <li class="footerLinks__listItem hideMinimalLayout">
                        <button type="button" class="button-link" data-dialog="freeEbookDialog">
                            What is UX Design?
                        </button>
                    </li>
                    <li class="footerLinks__listItem"><a href="/gift-of-learning">Give as gift</a></li>
                    <li class="footerLinks__listItem"><a href="/about/careers">Careers</a></li>
                </ul>
            </div>
        </div>
    </footer>

</div>

</body>
</html>
