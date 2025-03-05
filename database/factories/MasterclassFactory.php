<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Masterclass;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Masterclass>
 */
class MasterclassFactory extends Factory
{
    /** @inheritDoc */
    #[\Override]
    public function definition(): array
    {
        $title = $this->faker->sentence(4);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'short_description' => $this->faker->paragraph(1),
            'description' => "<div>{$this->faker->paragraph(3)}</div>",
            'picture_path' => $this->faker->imageUrl(),
            'start_at' => now()->addWeeks(1),
            'finish_at' => now()->addWeeks(1)->addHours(1),
        ];
    }

    public function withSpeaker(array $speakerAttributes = []): self
    {
        return $this->afterCreating(static function (Masterclass $masterclass) use ($speakerAttributes): void {
            $masterclass->speakers()->save(SpeakerFactory::new()->createOne($speakerAttributes));
        });
    }
}
