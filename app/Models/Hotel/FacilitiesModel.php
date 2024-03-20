<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FacilitiesModel extends Model
{
    use HasFactory,HasUuids, SoftDeletes ;

    protected $table = 'facilities';

    protected $guarded = ['id'];

    public function hotel_facilities(): HasMany
    {
        return $this->hasMany(HotelFacilitiesModel::class, 'facilities_id', 'id');
    }
}
