<?php

declare(strict_types=1);

namespace App\Http\Controllers\Courses;

use App\Models\Quiz;
use App\Models\QuizAnswer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class StoreQuizAnswerController
{
    public function __invoke(int $id, StoreQuizAnswerRequest $request): RedirectResponse
    {
        /** @var \App\Models\Quiz $quiz */
        $quiz = Quiz::query()->with(['lesson.course'])->where('id', $id)->firstOrFail();

        $quizAnswer = new QuizAnswer;
        $quizAnswer->user_id = Auth::id();
        $quizAnswer->answer = $request->input('answer');
        $quizAnswer->quiz()->associate($quiz);
        $quizAnswer->save();

        return redirect()->to(route('lessons.show', [
            'course' => $quiz->lesson->course,
            'number' => $quiz->lesson->number,
        ]));
    }
}
