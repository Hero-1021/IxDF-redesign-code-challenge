@extends('layouts.main')
@section('content')
        <div class="">

            <x-course.start-learning-section />

            <x-course.learning-path-selection-section />

            <x-course.courses :courses="$courses" />

            <x-course.masterclass.masterclasses :pastMasterclasses="$pastMasterclasses" />

            <x-course.masterclass.upcoming.upcoming-masterclasses :upcomingMasterclasses="$upcomingMasterclasses" />

        </div>

        <x-course.certificate.certificate-section />

        <div class="bg-neutral-100 even:bg-neutral-200">

            <x-course.how-it-works.how-it-works-section />

            <x-faq.faq-section />

        </div>
   @endsection
