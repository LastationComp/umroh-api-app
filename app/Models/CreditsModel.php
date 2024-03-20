<?php

namespace App\Models;

use App\Models\Umroh\CreditsRuleModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreditsModel extends Model
{
    use HasFactory,HasUuids, SoftDeletes;
    protected $table = 'credits';
    protected $guarded = ['id'];

    public function credits_rule(): HasMany
    {
        return $this->hasMany(CreditsRuleModel::class, 'credit_id', 'id');
    }
}
