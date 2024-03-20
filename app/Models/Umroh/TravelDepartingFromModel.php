<?php

namespace App\Models\Umroh;

use App\Models\CitiesModel;
use App\Models\Umroh\UmrohModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelDepartingFromModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'travel_departing';
    protected $guarded = ['id'];

    public function cities(): BelongsTo
    {
        return $this->belongsTo(CitiesModel::class, 'city_id', 'id');
    }

    public function umroh(): BelongsTo
    {
        return $this->BelongsTo(UmrohModel::class, 'umroh_id', 'id');
    }
}
