<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->callOnce([
            CountrySeeder::class,
            CourseSeeder::class,
        ]);

        $this->callWith(UserSeeder::class, ['numberOfUsers' => 1_000]);
        $this->call(CourseEnrollmentSeeder::class);
        $this->call(QuizAnswerSeeder::class);
    }
}
