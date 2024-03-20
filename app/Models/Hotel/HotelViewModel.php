<?php

namespace App\Models\Hotel;

use App\Models\HotelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelViewModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'hotel_view';

    protected $guarded = ['id'];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(HotelModel::class, 'hotel_id', 'id');
    }
}
