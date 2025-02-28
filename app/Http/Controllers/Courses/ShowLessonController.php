<?php

declare(strict_types=1);

namespace App\Http\Controllers\Courses;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Contracts\View\View;

final readonly class ShowLessonController
{
    public function __invoke(Course $course, int $number): View
    {
        /** @var \App\Models\Lesson $lesson */
        $lesson = Lesson::query()
            ->with(['quizzes'])
            ->where('number', $number)
            ->where('course_id', $course->id)
            ->firstOrFail();

        return view('lessons.show', [
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }
}
