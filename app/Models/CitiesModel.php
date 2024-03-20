<?php

namespace App\Models;

use App\Models\Umroh\TravelDepartingFromModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CitiesModel extends Model
{
    use HasFactory,HasUuids, SoftDeletes;

    protected $table = 'cities';
    protected $guarded = ['id'];

    public function travel_departing(): HasMany
    {
        return $this->hasMany(TravelDepartingFromModel::class, 'city_id', 'id');
    }
}
