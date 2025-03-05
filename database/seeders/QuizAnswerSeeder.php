<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class QuizAnswerSeeder extends Seeder
{
    public function run(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection<int, \App\Models\Course> $courses */
        $courses = Course::with(['quizzes' => function (Builder $query): void {
            $query->select('quizzes.id', 'quizzes.max_score', 'quizzes.lesson_id', 'quizzes.created_at');
            $query->orderBy('quizzes.created_at');
        }])->get();

        foreach ($courses as $course) {
            foreach ($course->quizzes as $quiz) {
                // It will create around 200_015 (enrollments) * 170 (quizzes) * 50% = 17_001_275 Quiz Answers

                DB::insert('
                    INSERT INTO quiz_answers (quiz_id, user_id, answer, score, created_at, updated_at)
                    SELECT
                        ?,
                        user_id,
                        ?,
                        FLOOR(RAND() * (? + 1)),
                        NOW(),
                        NOW()
                    FROM course_enrollments
                    WHERE course_id = ?
                        AND RAND() < 0.50 -- 50% chance to include each user
                ', [
                    $quiz->id,
                    fake()->sentence(),
                    $quiz->max_score,
                    $course->id,
                ]);
            }
        }
    }
}
