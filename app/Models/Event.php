<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'event_date',
        'datetime_from',
        'datetime_to',
        'capacity',
        'price',
        'location',
        'event_category_id',
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'datetime',
            'datetime_from' => 'datetime',
            'datetime_to' => 'datetime',
            'capacity' => 'integer',
            'price' => 'decimal:2',
        ];
    }

    public function eventCategory(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function lecturers(): BelongsToMany
    {
        return $this->belongsToMany(Lecturer::class);
    }

    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('event_date', '>', now());
    }

    public function scopeByCategory(Builder $query, int $categoryId): Builder
    {
        return $query->where('event_category_id', $categoryId);
    }

    public function scopeSearch(Builder $query, string $search): Builder
    {
        return $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('location', 'like', "%{$search}%");
        });
    }

    public function getFormattedEventDateAttribute(): string
    {
        return $this->event_date->format('j. n. Y');
    }

    public function getIsUpcomingAttribute(): bool
    {
        return $this->event_date > now();
    }
}
