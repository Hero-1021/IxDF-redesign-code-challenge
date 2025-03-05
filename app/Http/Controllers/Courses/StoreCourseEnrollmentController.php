<?php

declare(strict_types=1);

namespace App\Http\Controllers\Courses;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class StoreCourseEnrollmentController
{
    public function __invoke(Course $course): RedirectResponse
    {
        /** @var \App\Models\User $authUser */
        $authUser = Auth::user();

        $course->enroll($authUser);

        return redirect()->action(ShowCourseEnrollmentController::class, [$course]);
    }
}
