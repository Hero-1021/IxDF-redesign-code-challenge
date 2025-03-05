<?php

declare(strict_types=1);

namespace Tests\Feature\Models;

use App\Events\QuizAnswerEvaluated;
use App\Events\QuizAnswerEvaluating;
use App\Models\QuizAnswer;
use App\Models\User;
use Database\Factories\CountryFactory;
use Database\Factories\CourseFactory;
use Database\Factories\LessonFactory;
use Database\Factories\QuizAnswerFactory;
use Database\Factories\QuizFactory;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

#[CoversClass(\App\Models\QuizAnswer::class)]
final class QuizAnswerTest extends TestCase
{
    use RefreshDatabase;

    #[\Override]
    protected function setUp(): void
    {
        parent::setUp();

        CountryFactory::new()->create();
    }

    #[Test]
    public function it_dispatches_expected_event_before_grading(): void
    {
        Event::fake();
        $quiz = QuizFactory::new()->createOne([
            'max_score' => 10,
            'lesson_id' => LessonFactory::new()->state([
                'course_id' => CourseFactory::new(),
            ]),
        ]);
        $answer = QuizAnswerFactory::new()->for($quiz, 'quiz')->createOne([
            'user_id' => UserFactory::new(),
        ]);

        $answer->grade(9, new User);

        Event::assertDispatched(QuizAnswerEvaluating::class);
    }

    #[Test]
    public function it_dispatches_expected_event_after_grading(): void
    {
        Event::fake();
        $quiz = QuizFactory::new()->createOne([
            'max_score' => 10,
            'lesson_id' => LessonFactory::new()->state([
                'course_id' => CourseFactory::new(),
            ]),
        ]);
        $answer = QuizAnswerFactory::new()->for($quiz, 'quiz')->createOne([
            'user_id' => UserFactory::new(),
        ]);

        $answer->grade(9, new User);

        Event::assertDispatched(QuizAnswerEvaluated::class);
    }

    #[Test]
    public function it_stores_the_grade(): void
    {
        $quiz = QuizFactory::new()->createOne([
            'max_score' => 10,
            'lesson_id' => LessonFactory::new()->state([
                'course_id' => CourseFactory::new(),
            ]),
        ]);
        $answer = QuizAnswerFactory::new()->for($quiz, 'quiz')->createOne([
            'user_id' => UserFactory::new(),
        ]);

        $answer->grade(9, new User);

        $this->assertDatabaseHas(QuizAnswer::class, [
            'score' => 9,
            'id' => $answer->id,
        ]);
    }
}
