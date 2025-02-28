<?php

namespace Database\Factories;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speaker>
 */
final class SpeakerFactory extends Factory
{
    /** @var class-string<\App\Models\Speaker> */
    protected $model = Speaker::class;

    /** {@inheritDoc} */
    #[\Override]
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'picture_path' => $this->faker->imageUrl(),
        ];
    }
}
