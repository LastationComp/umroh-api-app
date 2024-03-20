<?php

namespace App\Models\Umroh;

use App\Models\PlaneModel;
use App\Models\Umroh\UmrohModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UmrohAirlineModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'umroh_airline';
    protected $guarded = ['id'];

    public function plane(): BelongsTo
    {
        return $this->belongsTo(PlaneModel::class, 'plane_id', 'id');
    }

    public function umroh(): BelongsTo
    {
        return $this->BelongsTo(UmrohModel::class, 'umroh_id', 'id');
    }
}
