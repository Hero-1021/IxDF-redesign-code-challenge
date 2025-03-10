<?php

namespace App\View\Components\Course\Masterclass;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Masterclass;

class Masterclasses extends Component
{
    /**
     * Create a new component instance.
     */
    public $pastMasterclasses;

    public function __construct($pastMasterclasses)
    {
        //
        $this->pastMasterclasses = $pastMasterclasses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.masterclass.masterclasses');
    }
}
