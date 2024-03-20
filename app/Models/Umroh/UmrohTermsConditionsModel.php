<?php

namespace App\Models\Umroh;

use App\Models\Umroh\UmrohModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UmrohTermsConditionsModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'umroh_terms_conditions';
    protected $guarded = ['id'];

    public function umroh(): BelongsTo
    {
        return $this->BelongsTo(UmrohModel::class, 'umroh_id', 'id');
    }
}
