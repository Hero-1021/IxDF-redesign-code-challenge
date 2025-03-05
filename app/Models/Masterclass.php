<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Masterclass.
 *
 * @property int $id Unique identifier for the object.
 * @property non-empty-string $title Short title of the Masterclass.
 * @property string $slug Unique slug (URL-friendly).
 * @property string $description HTML description of the Masterclass.
 * @property string $picture_path Relative URL path to the Masterclass picture.
 * @property \Illuminate\Support\Carbon $start_at Time at which Masterclass starts.
 * @property \Illuminate\Support\Carbon $finish_at Time at which Masterclass finish.
 * @property \Illuminate\Support\Carbon $created_at Time at which the object was created. Technical column and should not represent any domain information.
 * @property \Illuminate\Support\Carbon $updated_at Time at which the object was the last time updated. Technical column and should not represent any domain information.
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Speaker> $speakers
 *
 * @method static \Illuminate\Database\Eloquent\Builder<self> upcoming()
 * @method static \Illuminate\Database\Eloquent\Builder<self> finished()
 */
class Masterclass extends Model
{
    /** @use HasFactory<\Database\Factories\MasterclassFactory> */
    use HasFactory;

    /** @var array<string, string> Attribute casting */
    protected $casts = [
        'start_at' => 'datetime',
        'finish_at' => 'datetime',
    ];

    public function speakers(): BelongsToMany
    {
        return $this->belongsToMany(Speaker::class)->withTimestamps();
    }

    public function scopeUpcoming(Builder $query): void
    {
        $query->where('start_at', '>', now());
    }

    public function scopeFinished(Builder $query): void
    {
        $query->where('finish_at', '<', now());
    }
}
