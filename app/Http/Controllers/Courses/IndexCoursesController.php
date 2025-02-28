<?php

declare(strict_types=1);

namespace App\Http\Controllers\Courses;

use App\Models\Course;
use App\Models\Masterclass;
use Illuminate\Contracts\View\View;

final readonly class IndexCoursesController
{
    public function __invoke(): View
    {
        $upcomingMasterclasses = Masterclass::query()->scopes(['upcoming'])->get();
        $pastMasterclasses = Masterclass::query()->scopes(['finished'])->get();

        return view('courses.index', [
            'courses' => Course::query()->get(),
            'upcomingMasterclasses' => $upcomingMasterclasses,
            'pastMasterclasses' => $pastMasterclasses,
        ]);
    }
}
