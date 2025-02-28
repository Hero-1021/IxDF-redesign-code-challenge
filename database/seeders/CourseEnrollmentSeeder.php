<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseEnrollment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class CourseEnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var \Illuminate\Support\Collection<int, int> $courseIds */
        $courseIds = Course::query()->orderBy('id')->pluck('id');
        assert($courseIds->count() >= 5, 'Not enough courses to seed Course Enrollments');

        /**
         * - all users to the 1st course (design-thinking) (slow!!!)
         * - 8 users to the 2nd course (ux-for-beginners)
         * - 7 users to the 3rd course (accessibility)
         * - 3 users to the 4th course (vr-ux)
         * - 0 users to the 0th course (ai)
         */
        $this->enrollAllUsersTo($courseIds->first());
        $this->enrollRandomUsersTo(8, $courseIds->get(1));
        $this->enrollRandomUsersTo(7, $courseIds->get(2));
        $this->enrollRandomUsersTo(3, $courseIds->get(3));
    }

    private function enrollAllUsersTo(int $courseId): void
    {
        // Enroll all users to the first course using a raw SQL insert for efficiency
        DB::insert('
            INSERT INTO course_enrollments (user_id, course_id, created_at, updated_at)
            SELECT id, ?, NOW(), NOW() FROM users
        ', [$courseId]);
    }

    private function enrollRandomUsersTo(int $numberOfUsersToEnrol, int $courseId): void
    {
        $userIds = User::query()->inRandomOrder()->limit($numberOfUsersToEnrol)->pluck('id');

        $secondCourseEnrollments = $userIds->map(static function ($userId) use ($courseId): array {
            return [
                'user_id' => $userId,
                'course_id' => $courseId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->all();

        CourseEnrollment::query()->insert($secondCourseEnrollments);
    }
}
