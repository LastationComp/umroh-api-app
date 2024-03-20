<?php

namespace App\Models;

use App\Models\Hotel\HotelFacilitiesModel;
use App\Models\Hotel\HotelViewModel;
use App\Models\Umroh\UmrohHotelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelModel extends Model
{
    use HasFactory ,HasUuids, SoftDeletes;

    protected $table = 'hotel';
    protected $guarded = ['id'];

    public function umroh_hotel(): HasMany //done
    {
        return $this->hasMany(UmrohHotelModel::class, 'hotel_id', 'id');
    }

    public function hotel_facilities(): HasMany //done
    {
        return $this->hasMany(HotelFacilitiesModel::class, 'hotel_id', 'id');
    }

    public function hotel_view(): HasMany //done
    {
        return $this->hasMany(HotelViewModel::class, 'hotel_id', 'id');
    }
}
