<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\Quiz;
use App\Models\QuizAnswer;
use App\Models\User;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(\App\Models\QuizAnswer::class)]
final class QuizAnswerTest extends TestCase
{
    #[Test]
    public function it_does_not_allow_to_grade_answer_higher_than_max_score_for_the_quiz(): void
    {
        $quiz = new Quiz;
        $quiz->max_score = 10;
        $answer = new QuizAnswer;
        $answer->setRelation('quiz', $quiz);

        $this->expectException(\OutOfBoundsException::class);

        $answer->grade(11, new User);
    }
}
