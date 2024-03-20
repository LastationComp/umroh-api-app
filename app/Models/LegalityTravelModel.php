<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LegalityTravelModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'legality_travel';
    protected $guarded = ['id'];

    public function travel(): BelongsTo
    {
        return $this->belongsTo(TravelModel::class, 'travel_id', 'id');
    }
}
