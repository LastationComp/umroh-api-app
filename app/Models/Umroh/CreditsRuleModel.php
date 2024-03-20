<?php

namespace App\Models\Umroh;

use App\Models\CreditsModel;
use App\Models\Umroh\UmrohModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreditsRuleModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'credits_rule';
    protected $guarded = ['id'];

    public function credits(): BelongsTo
    {
        return $this->belongsTo(CreditsModel::class, 'credit_id', 'id');
    }

    public function umroh(): BelongsTo
    {
        return $this->BelongsTo(UmrohModel::class, 'umroh_id', 'id');
    }
}
