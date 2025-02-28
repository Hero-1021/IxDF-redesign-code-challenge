<?php

declare(strict_types=1);

namespace App\Models;

use App\Events\QuizAnswerEvaluated;
use App\Events\QuizAnswerEvaluating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $quiz_id
 * @property string $answer
 * @property int $score
 * @property-read \App\Models\Quiz $quiz
 */
final class QuizAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\QuizAnswerFactory> */
    use HasFactory;

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Quiz, $this> */
    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    /** @param int<0, max> $score */
    public function grade(int $score, GraderInterface $gradedBy): void
    {
        if ($score > $this->quiz->max_score) {
            throw new \OutOfBoundsException("Score cannot be higher than the maximum for this quiz (max={$this->quiz->max_score})");
        }

        event(new QuizAnswerEvaluating($this, $score, $gradedBy));

        $this->score = $score;
        $this->save();

        event(new QuizAnswerEvaluated($this, $score, $gradedBy));
    }
}
