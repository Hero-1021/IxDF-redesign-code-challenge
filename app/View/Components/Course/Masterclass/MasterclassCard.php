<?php

namespace App\View\Components\Course\Masterclass;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Masterclass;

class MasterclassCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $masterclass;

    public function __construct(Masterclass $masterclass)
    {
        //
        $this->masterclass = $masterclass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.masterclass.masterclass-card');
    }
}
