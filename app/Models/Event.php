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
        'capacity',
        'price',
        'location',
        'event_category_id',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'event_date' => 'datetime',
        'capacity' => 'integer',
        'price' => 'decimal:2',
        'location' => 'string',
        'event_category_id' => 'integer',
    ];

    public static function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date|after:now',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'event_category_id' => 'required|exists:event_categories,id',
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

    public function getFormattedPriceAttribute(): string
    {
        return number_format((int) $this->price / 100, 0, ',', ' ').' Kč';
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
