<?php

namespace App\Models;

use App\Models\Umroh\UmrohAirlineModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaneModel extends Model
{
    use HasFactory,HasUuids, SoftDeletes;

    protected $table = 'plane';
    protected $guarded = ['id'];

    public function umroh_airline(): HasMany
    {
        return $this->hasMany(UmrohAirlineModel::class, 'plane_id', 'id');
    }
}
