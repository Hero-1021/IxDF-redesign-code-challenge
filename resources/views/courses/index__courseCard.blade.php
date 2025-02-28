<?php
/**
 * @var \App\Models\Course $course
 */
?>

<div class="card--isLink card card--course card--clearerHeader" title="{{ $course->title }}" data-course-id="80" data-schedule-id="9934" data-close-timestamp="1742256000" data-location-pathname="/courses/ai-for-designers">

    <a class="card__link" href="/courses/ai-for-designers" data-gtm-click=""><h3>{{ $course->title }}</h3></a>

    <div class="card__header">
        <picture class="card__picture">
            <source media="(max-width: 768px)" srcset="{{ $course->cover_image_path }}?tr=w-232,fo-auto">
            <source media="(min-width: 767px)" srcset="{{ $course->cover_image_path }}?tr=w-464,fo-auto">
            <img src="{{ $course->cover_image_path }}?tr=fo-auto" class="w-full h-full object-cover object-position-top" alt="">
        </picture>
        <div class="card__title js-cardTitle truncate-6" aria-hidden="true">{{ $course->title }}
        </div>
    </div>

    <div class="card__contents">
        <div class="flex justify-between items-center">

            <div class="countdown flex-auto pr-small">
                <div class="title">Closes in</div>
                <div class="js-countdownClock">
                    <div class="flex items-stretch flex-no-wrap clock"><div class="box clock-item day"><div class="number">17</div><div class="unit">days</div></div></div>
                </div>
            </div>


            <div class="card__bookingProgress">
                <div class="progressCircular js-progressCircular progressCircular--hidePercentage" data-percentage="12" data-latest-shown-progress="0">
                    <svg class="progressCircular__indicatorContainer" width="100%" height="69.734" viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg">
                        <circle class="progressCircular__potentialIndicator" r="29" cx="50%" cy="50%" fill="transparent" stroke-dasharray="182.12" stroke-dashoffset="0"></circle>
                        <circle class="progressCircular__filledOutIndicator js-filledOutIndicator" r="29" cx="50%" cy="50%" fill="transparent" stroke-dasharray="182.12" stroke-dashoffset="0" style="stroke-dashoffset: 160.34688903922304px"></circle>
                    </svg>
                </div>
                <div class="card__bookingProgressValue" data-percentage="12"></div>
                <div class="card__bookingProgressUnit">booked</div>
            </div>
        </div>
    </div>

    <div class="card__footer" aria-hidden="true">
        <div class="button button--primary cardFooter__button">
            <div class="cardFooter__buttonText js-countdownDependentCardState">
                View Course
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-icon cardFooter__icon" width="20" height="20">
                    <use xlink:href="#chevron-right-bold"></use>
                </svg>
            </div>
        </div>
    </div>
</div>
