<?php

namespace App\Models;

use App\Models\Umroh\UmrohModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComparisonModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'comparison';

    protected $guarded = ['id'];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    public function umroh(): BelongsTo
    {
        return $this->BelongsTo(UmrohModel::class, 'umroh_id', 'id');
    }
}
