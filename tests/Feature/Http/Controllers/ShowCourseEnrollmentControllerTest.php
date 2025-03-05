<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use Database\Factories\CountryFactory;
use Database\Factories\CourseFactory;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

#[CoversClass(\App\Http\Controllers\Courses\ShowCourseEnrollmentController::class)]
final class ShowCourseEnrollmentControllerTest extends TestCase
{
    use RefreshDatabase;

    #[\Override]
    protected function setUp(): void
    {
        parent::setUp();

        CountryFactory::new()->create();
        $this->withoutExceptionHandling();
        $this->withoutVite();
    }

    #[Test]
    public function it_displays_course_page_if_user_not_enrolled(): void
    {
        $course = CourseFactory::new()->createOne();
        $user = UserFactory::new()->createOne();

        $response = $this
            ->actingAs($user)
            ->get(route('courseEnrollments.show', ['course' => $course]));

        $response->assertOk();
        $response->assertViewIs('courses.show');
    }

    #[Test]
    public function it_displays_course_enrollment_page_if_user_enrolled(): void
    {
        $course = CourseFactory::new()->createOne();
        $user = UserFactory::new()->createOne();
        $course->enroll($user);

        $response = $this
            ->actingAs($user)
            ->get(route('courseEnrollments.show', ['course' => $course]));

        $response->assertOk();
        $response->assertViewIs('courseEnrollments.show');
    }
}
