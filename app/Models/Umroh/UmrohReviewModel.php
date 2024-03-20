<?php

namespace App\Models\Umroh;

use App\Models\User;
use App\Models\Umroh\UmrohModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UmrohReviewModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'umroh_review';
    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    public function image_preview(): HasMany
    {
        return $this->hasMany(ImageReviewModel::class, 'umroh_review_id', 'id');
    }

    public function umroh(): BelongsTo
    {
        return $this->BelongsTo(UmrohModel::class, 'umroh_id', 'id');
    }
}
