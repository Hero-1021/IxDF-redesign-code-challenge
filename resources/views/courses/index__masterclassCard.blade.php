<?php
/**
 * @var \App\Models\Masterclass $masterclass
 */
?>
<article class="card card--clearerHeader card--new card--isLink card--isLink">
    <a class="card__link" href="https://www.interaction-design.org/master-classes/design-to-delight-every-generation-from-gen-z-to-boomers"><h3>{{ $masterclass->title }}</h3></a>

    <div class="card__header">
        <picture class="card__picture">
            <img src="{{ $masterclass->picture_path }}"
                 class="w-full h-full object-cover"
                 alt="">
        </picture>
        <div class="card__title js-cardTitle truncate-6" aria-hidden="true">{{ $masterclass->title }}</div>
    </div>


    <div class="card__contents">
        <span class="card__copy card__description truncate-3">
        {{ $masterclass->short_description }}
        </span>
        <span class="card__copy truncate-1">
            By
            @foreach($masterclass->speakers as $speaker)
                {{ $speaker->name }}
            @endforeach
            </span>
    </div>


    <div class="card__footer">
        <div class="button button--primary cardFooter__button">
            <div class="cardFooter__buttonText js-countdownDependentCardState">
                Learn more
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                     class="svg-icon cardFooter__icon" width="20" height="20"
                >
                    <use xlink:href="#chevron-right-bold"></use>
                </svg>
            </div>
        </div>
    </div>
</article>
