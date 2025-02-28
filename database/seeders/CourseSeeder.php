<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Database\Factories\CourseFactory;
use Database\Factories\LessonFactory;
use Database\Factories\QuizFactory;
use Illuminate\Database\Seeder;

final class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [];
        $courses[] = CourseFactory::new()->createOne(['title' => 'Design Thinking: The Ultimate Guide', 'slug' => 'design-thinking', 'cover_image_path' => 'https://public-media.interaction-design.org/images/courses/hds/course_58--square_thumbnail.jpg']);
        $courses[] = CourseFactory::new()->createOne(['title' => 'User Experience: The Beginner’s Guide', 'slug' => 'ux-for-beginners', 'cover_image_path' => 'https://public-media.interaction-design.org/images/courses/hds/course_50--square_thumbnail.jpg']);
        $courses[] = CourseFactory::new()->createOne(['title' => 'Accessibility: How to Design for All', 'slug' => 'accessibility', 'cover_image_path' => 'https://public-media.interaction-design.org/images/courses/hds/course_51--square_thumbnail.jpg']);
        $courses[] = CourseFactory::new()->createOne(['title' => 'UX Design for Virtual Reality', 'slug' => 'vr-ux', 'cover_image_path' => 'https://public-media.interaction-design.org/images/courses/hds/course_79--square_thumbnail--1698216036.jpg']);
        $courses[] = CourseFactory::new()->createOne(['title' => 'AI for Designers', 'slug' => 'ai', 'cover_image_path' => 'https://public-media.interaction-design.org/images/courses/hds/course_80--square_thumbnail--1699627661.jpg']);

        foreach ($courses as $course) {
            $this->addLessonsToCourse($course);
        }
    }

    private function addLessonsToCourse(Course $course): void
    {
        $numberOfLessons = random_int(8, 15);

        for ($i = 0; $i < $numberOfLessons; $i++) {
            $lesson = LessonFactory::new()->state([
                'course_id' => $course->getKey(),
                'number' => $i + 1,
            ])->createOne();
            $this->addQuizzesToLesson($lesson);
        }
    }

    private function addQuizzesToLesson(Lesson $lesson): void
    {
        $numberOfQuizzes = random_int(1, 5);

        for ($i = 0; $i < $numberOfQuizzes; $i++) {
            QuizFactory::new()->state([
                'lesson_id' => $lesson->getKey(),
                'max_score' => random_int(5, 10),
            ])->createOne();
        }
    }
}
