<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class CoursesPageSeeder extends Seeder
{
    /**
     * Seed the application's database for the /courses page.
     */
    public function run(): void
    {
        $this->callOnce([
            CourseSeeder::class,
            MasterclassSeeder::class,
        ]);
    }
}
