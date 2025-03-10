<?php

namespace App\View\Components\Course\Masterclass\Upcoming;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Masterclass;

class UpcomingMasterclasses extends Component
{
    /**
     * Create a new component instance.
     */
    public $upcomingMasterclasses;

    public function __construct($upcomingMasterclasses)
    {
        //
        $this->upcomingMasterclasses = $upcomingMasterclasses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.masterclass.upcoming.upcoming-masterclasses');
    }
}
