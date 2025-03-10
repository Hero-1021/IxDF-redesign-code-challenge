<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UX Design Courses | Learn User Experience (UX) Design Online</title>

        <!-- Preconnect for Faster Loading -->
        <link rel="preconnect" href="https://public-media.interaction-design.org">
        <link rel="preconnect" href="https://public-images.interaction-design.org">
        <link rel="preconnect" href="https://assets.interaction-design.org" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700|Source+Code+Pro|Source+Sans+Pro:400,400i,700&display=swap">

        <!-- Tailwind CSS -->
        @vite('resources/css/app.css')

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="48x48" href="{{ Vite::asset('resources/images/favicon--48.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon--32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicon--16.png') }}">
        <link rel="icon" href="/favicon.ico" sizes="16x16" type="image/vnd.microsoft.icon">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
        <!-- Font Awesome Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

        <!-- Meta Tags -->
        <meta name="apple-mobile-web-app-title" content="UX courses">
        <meta name="application-name" content="UX courses">
        <meta name="theme-color" content="#404040">
        <meta name="msapplication-config" content="/ms-app-browserconfig.xml"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO & Social Media -->
        <meta property="fb:app_id" content="142481353231314"/>
        <meta property="fb:page_id" content="19975077227"/>
        <link rel="alternate" type="application/rss+xml" title="Interaction Design Foundation - UX Feed" href="https://www.interaction-design.org/rss/site_news.xml"/>
        <link rel="canonical" href="https://www.interaction-design.org/courses"/>
        <meta name="description" content="Online, self-paced UX Courses created by design experts. Join over 185,910 students in the world's largest design school and gain recognized certificates."/>
        <meta property="og:type" content="product.group"/>
        <meta name="robots" content="max-image-preview:large">
        <meta property="og:site_name" content="The Interaction Design Foundation"/>
        <meta property="og:title" content="UX Design Courses"/>
        <meta property="og:description" content="Online, self-paced UX Courses created by design experts. Join over 185,910 students in the world's largest design school and gain recognized certificates."/>
        <meta property="og:image" content="{{ Vite::asset('resources/images/ixdf-logo.svg') }}"/>
        <meta property="og:url" content="https://www.interaction-design.org/courses"/>
        <meta name="twitter:title" content="UX Design Courses"/>
        <meta name="twitter:description" content="Online, self-paced UX Courses created by design experts. Join over 185,910 students in the world's largest design school and gain recognized certificates."/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@ixdf_org"/>
        <meta name="twitter:creator" content="@ixdf_org"/>
       
    </head>
    <body class="bg-neutral-100 text-neutral-900 font-sans">

        <!-- SVG Icons -->
        <div class="hidden icon-sprite-container" id="SVGSpriteWrap">
            @include('courses.index__icons', [])
        </div>

        <!-- Page Layout -->
        <div class="flex flex-col min-h-screen w-full bg-neutral-2 even:bg-neutral-2 text-base sm:text-custom18 font-source leading-6">
            <x-layouts.header />
            <x-layouts.navbar />

            <!-- Main Content -->
            <main class="">
                @yield('content')
            </main>

            <x-layouts.footer />
        </div>

    </body>
</html>
