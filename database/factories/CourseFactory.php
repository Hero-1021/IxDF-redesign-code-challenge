<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/** @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course> */
final class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => function (array $attributes): string {
                $typicalWords = [
                    'Design',
                    'Thinking',
                    'UX',
                    'UI',
                    'AI',
                    'User Experience',
                    'How to',
                    'Product',
                    'Web Design',
                    'Visualization',
                    'Accessibility',
                    'Interaction',
                    'Information',
                    'Psychology',
                    'Management',
                    'Emotional',
                    'Patterns',
                    'for',
                    'and',
                    'or',
                    'with',
                    'from scratch',
                ];

                return collect($typicalWords)->shuffle()->take(random_int(3, 7))->implode(' ');
            },
            'slug' => fn (array $attributes): string => Str::slug($attributes['title']),
            'cover_image_path' => $this->faker->imageUrl(),
        ];
    }
}
