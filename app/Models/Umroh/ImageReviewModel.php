<?php

namespace App\Models\Umroh;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageReviewModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'image_review';
    protected $guarded = ['id'];

    public function umroh_review(): BelongsTo
    {
        return $this->belongsTo(UmrohReviewModel::class, 'umroh_review_id', 'id');
    }
}
