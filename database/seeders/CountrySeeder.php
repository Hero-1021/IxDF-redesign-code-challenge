<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\CountryFactory;
use Illuminate\Database\Seeder;

final class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CountryFactory::times(10)->create();
    }
}
