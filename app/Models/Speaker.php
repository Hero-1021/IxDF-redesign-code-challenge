<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id Unique identifier for the object.
 * @property string $name plain text name (usually full name)
 * @property string $title plain text title
 * @property string $description HTML description
 * @property string $picture_path
 * @property \Illuminate\Support\Carbon $created_at Time at which the object was created. Technical column and should not represent any domain information.
 * @property \Illuminate\Support\Carbon $updated_at Time at which the object was the last time updated. Technical column and should not represent any domain information.
 * @property \Illuminate\Database\Eloquent\Collection<int, Masterclass> $masterclasses
 */
final class Speaker extends Model
{
    /** @use HasFactory<\Database\Factories\SpeakerFactory> */
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\App\Models\Masterclass>
     */
    public function masterclasses(): BelongsToMany
    {
        return $this->belongsToMany(Masterclass::class)->withTimestamps();
    }
}
