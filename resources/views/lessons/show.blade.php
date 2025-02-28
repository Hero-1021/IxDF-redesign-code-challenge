<?php
/**
 * @var \App\Models\Course $course
 * @var \App\Models\Lesson $lesson
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="mb-4">Course: {{ $course->title }}</h1>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header">Lessons</h2>
                    <ul>
                        @foreach($course->lessons as $lessonInCourse)
                            <li>
                                <a href="{{ route('lessons.show', ['course' => $course, 'number' => $lessonInCourse->number]) }}">
                                    {{ $lessonInCourse->number }}. {{ $lessonInCourse->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">Lesson #{{ $lesson->number }}: {{ $lesson->title }}</h2>
                    <div class="card-body">
                        <ol>
                            @foreach($lesson->quizzes as $quiz)
                                <li>
                                    <div>
                                        <p>{{ $quiz->question }}</p>

                                        <div>
                                            <form action="{{ route('quizAnswers.store', [$quiz->id]) }}" method="POST">
                                                @csrf
                                                <?php $answer = $quiz->getAnswerOf(auth()->user()); ?>
                                                <fieldset {{ $answer ? 'disabled' : '' }}>
                                                    <label for="answer{{ $quiz->id }}" class="form-label">your answer:</label>
                                                    <textarea
                                                        id="answer{{ $quiz->id }}"
                                                        name="answer"
                                                        cols="30"
                                                        rows="10"
                                                        class="form-control mb-2 @error('answer') is-invalid @enderror"
                                                        required
                                                        minlength="3"
                                                    >{{ optional($answer)->answer }}</textarea>
                                                    @error('answer')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </fieldset>


                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
