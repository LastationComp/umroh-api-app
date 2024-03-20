<?php

namespace App\Models\Hotel;

use App\Models\HotelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HotelFacilitiesModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'hotel_facilities';
    protected $guarded = ['id'];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(HotelModel::class, 'hotel_id', 'id');
    }

    public function facilities(): BelongsTo
    {
        return $this->belongsTo(FacilitiesModel::class, 'facilities_id', 'id');
    }
}
