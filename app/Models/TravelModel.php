<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelModel extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'travel';
    protected $guarded = ['id'];

    public function legality_travel(): HasMany
    {
        return $this->hasMany(LegalityTravelModel::class, 'travel_id', 'id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
