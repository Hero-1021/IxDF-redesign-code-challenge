<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Courses\IndexCoursesController;
use App\Http\Controllers\Courses\ShowCourseEnrollmentController;
use App\Http\Controllers\Courses\ShowLessonController;
use App\Http\Controllers\Courses\StoreCourseEnrollmentController;
use App\Http\Controllers\Courses\StoreQuizAnswerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Auth::routes(['register' => false, 'reset' => false]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', DashboardController::class)
    ->name('dashboard')
    ->middleware('auth');

Route::get('/courses', IndexCoursesController::class)
    ->name('courses.index');

Route::get('/courses/{course:slug}', ShowCourseEnrollmentController::class)
    ->name('courseEnrollments.show')
    ->middleware('auth');

Route::post('/course-enrollments/{course:slug}', StoreCourseEnrollmentController::class)
    ->name('courseEnrollments.store')
    ->middleware('auth');

Route::get('/courses/{course:slug}/{number}', ShowLessonController::class)
    ->name('lessons.show')
    ->middleware('auth');

Route::post('/quiz-answers/{id}', StoreQuizAnswerController::class)
    ->name('quizAnswers.store')
    ->middleware('auth');

Route::get('/random-login', [LoginController::class, 'loginAsRandomUser'])
    ->name('auth.randomLogin');
