<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'biography',
        'photo',
    ];

    protected function casts(): array
    {
        return [
            'first_name' => 'string',
            'last_name' => 'string',
            'title' => 'string',
            'biography' => 'string',
            'photo' => 'string',
        ];
    }

    public static function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'biography' => 'nullable|string',
            'photo' => 'nullable|string|max:255',
        ];
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }

    public function getFullNameAttribute(): string
    {
        $parts = array_filter([
            $this->title,
            $this->first_name,
            $this->last_name,
        ]);

        return implode(' ', $parts);
    }
}
