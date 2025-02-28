<?php
/**
 * @var \App\Models\Masterclass $masterclass
 */
?>
<article>
    <h3>Speak Strategy, Get Influence: How Designers Can Shape Product Decisions</h3>

    <div class="row">
        <div class="col-md-8">
            <div class="inline-flex items-center">
                @foreach($masterclass->speakers as $speaker)
                    <div class="media__image media__image--40">
                        <picture class="image image--round">
                            <img
                                    src="{{ $speaker->picture_path }}"
                                    alt="Photo of Adam Thomas"
                                    width="240"
                                    height="340">
                        </picture>
                    </div>
                    <div class="media__body text-sans-serif ">
                        <strong>{{ $speaker->name }}</strong>, {{ $speaker->title }}
                    </div>
                @endforeach
            </div>
            <div
                    data-collapsible-overflow-text
                    class="collapsibleOverflowText__container"
                    data-max-visible-lines="4"
            >
                <div
                        class="js-collapsibleOverflowText__text collapsibleOverflowText__text mb-small "
                        style="max-height: 122.4px"
                >
                    <div class="rteContent">
                        {!! $masterclass->description !!}
                    </div>
                </div>

                <div class="text-center">
                    <button type="button" class="collapsibleOverflowText__button js-collapsibleOverflowText__button link link--noUnderline inline-flex items-center">
                        <span class="collapsibleOverflowText__ButtonText--collapsed">Read full description</span>
                        <span class="collapsibleOverflowText__ButtonText--expanded">Hide full description</span>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                             class="svg-icon collapsibleOverflowText__chevron fill-brand-02 ml-tiny" width="18" height="22"
                        >
                            <use xlink:href="#chevron-down"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">

            <a href="https://www.interaction-design.org/master-classes/speak-strategy-get-influence-how-designers-can-shape-product-decisions"
               aria-label="Learn more about “Speak Strategy, Get Influence: How Designers Can Shape Product Decisions” webinar"
               class="button button--primary button--withArrow button--block mb-medium-large">
                Learn more
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                     class="svg-icon button__arrowIcon ml-tiny"
                >
                    <use xlink:href="#chevron-right-bold"></use>
                </svg>
            </a>

            <div class="scheduleBar__time mb-medium">
                <div class="countdown countdown--horizontal flex-wrap"
                     data-close-timestamp="1741881600">
                    <div class="countdown__title">
                        Webinar starts in
                    </div>
                    <div class="countdown__container flexible-countdown">
                        <div class="flex clock">
                            <div class="clock-item clock-item--fixWidth day">
                                <div class="number">13</div>
                                <div class="unit">days</div>
                            </div>

                            <div class="clock-item clock-item--fixWidth hour">
                                <div class="number">03</div>
                                <div class="unit">hrs</div>
                            </div>
                            <div class="clock-item clock-item--fixWidth minute">
                                <div class="number">34</div>
                                <div class="unit">mins</div>
                            </div>
                            <div class="clock-item clock-item--fixWidth second">
                                <div class="number">52</div>
                                <div class="unit">secs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-neutral-05">
                <p class="mb-small">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon align-middle" width="24" height="24"
                    >
                        <use xlink:href="#calendar"></use>
                    </svg>
                    <time class="align-middle"
                          datetime="2025-03-13T16:00:00+00:00">Thu, March 13, 2025
                    </time>
                </p>
                <p class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                         class="svg-icon mr-tiny" width="20" height="20"
                    >
                        <use xlink:href="#clock"></use>
                    </svg>
                    {{ $masterclass->start_at->format('h:i A (\U\T\C P)') }}
                    <span class="tip-bottom js-timestampToToolTip dataTip__showInResponsive" data-tip data-title="This is a place for local time"
                          data-timestamp="{{ $masterclass->start_at->timestamp }}">

                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                             class="svg-icon align-vertical-center ml-tiny" width="20" height="20">
                            <use xlink:href="#info"></use>
                        </svg>
                    </span>
                </p>
            </div>

        </div>
    </div>
</article>
