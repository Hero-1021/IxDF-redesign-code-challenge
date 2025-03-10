<?php

namespace App\View\Components\Course;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Course;

class Courses extends Component
{
    /**
     * Create a new component instance.
     */
    public $courses;

    public function __construct($courses)
    {
        //
        $this->courses = $courses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.courses');
    }
}
