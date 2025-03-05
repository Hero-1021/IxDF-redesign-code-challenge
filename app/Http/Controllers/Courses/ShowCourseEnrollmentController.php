<?php

declare(strict_types=1);

namespace App\Http\Controllers\Courses;

use App\Models\Course;
use App\Models\CourseEnrollment;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

final readonly class ShowCourseEnrollmentController
{
    public function __invoke(Course $course): View
    {
        $enrollment = CourseEnrollment::query()
            ->with(['course.lessons'])
            ->where('course_id', $course->id)
            ->where('user_id', Auth::id())
            ->first();

        if ($enrollment === null) {
            return view('courses.show', ['course' => $course]);
        }

        return view('courseEnrollments.show', ['enrollment' => $enrollment]);
    }
}
