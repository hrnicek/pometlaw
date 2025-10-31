<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
    ];

    public static function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:event_categories,name',
            'description' => 'nullable|string',
        ];
    }

    public static function updateRules(int $id): array
    {
        return [
            'name' => 'required|string|max:255|unique:event_categories,name,'.$id,
            'description' => 'nullable|string',
        ];
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
