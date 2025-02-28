<?php
/**
 * @var \App\Models\CourseEnrollment $enrollment
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">Lessons</h2>
                    <div class="card-body">
                        <ol>
                            @foreach($enrollment->course->lessons as $lesson)
                                <li>
                                    <a href="{{ route('lessons.show', ['course' => $enrollment->course, 'number' => $lesson->number]) }}">
                                        {{ $lesson->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>

                <div class="card mt-4">
                    <h2 class="card-header">Statistics</h2>
                    <div class="card-body">

                        <p>
                            Your rankings improve every time you answer a question correctly.
                            Keep learning and earning course points to become one of our top learners!
                        </p>
                        @include('courseEnrollments.show__fake_statistics', [
                            'user' => $enrollment->user,
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
