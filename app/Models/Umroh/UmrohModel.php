<?php

namespace App\Models\Umroh;

use App\Models\ComparisonModel;
use App\Models\User;
use App\Models\WishlistModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UmrohModel extends Model
{
    use HasFactory,HasUuids, SoftDeletes;

    protected $table = 'umroh';
    protected $guarded = ['id'];

    //belongsto
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    //hasmany
    public function comparison(): HasMany //done
    {
        return $this->hasMany(ComparisonModel::class, 'umroh_id', 'id');
    }

    public function wishlist(): HasMany //done
    {
        return $this->hasMany(WishlistModel::class, 'umroh_id', 'id');
    }

    public function umroh_terms_condition(): HasMany //done
    {
        return $this->hasMany(UmrohTermsConditionsModel::class, 'umroh_id', 'id');
    }

    public function umroh_review(): HasMany //done
    {
        return $this->hasMany(UmrohReviewModel::class, 'umroh_id', 'id');
    }

    public function umroh_package(): HasMany //done
    {
        return $this->hasMany(UmrohPackageModel::class, 'umroh_id', 'id');
    }

    public function umroh_view(): HasMany //done
    {
        return $this->hasMany(UmrohViewModel::class, 'umroh_id', 'id');
    }

    public function umroh_airline(): HasMany //done
    {
        return $this->hasMany(UmrohAirlineModel::class, 'umroh_id', 'id');
    }

    public function umroh_hotel(): HasMany //done
    {
        return $this->hasMany(UmrohHotelModel::class, 'umroh_id', 'id');
    }

    public function travel_plan(): HasMany //done
    {
        return $this->hasMany(TravelPlanModel::class, 'umroh_id', 'id');
    }

    public function umroh_facilities(): HasMany //done
    {
        return $this->hasMany(UmrohFacilitiesModel::class, 'umroh_id', 'id');
    }

    public function travel_departing(): HasMany //done
    {
        return $this->hasMany(TravelDepartingFromModel::class, 'umroh_id', 'id');
    }

    public function credits_rule(): HasMany //done
    {
        return $this->hasMany(CreditsRuleModel::class, 'umroh_id', 'id');
    }
}
