<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'note',
    ];

    protected function casts(): array
    {
        return [
            'event_id' => 'integer',
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'note' => 'string',
        ];
    }

    public static function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'note' => 'nullable|string|max:2000',
        ];
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
