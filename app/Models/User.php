<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Hotel\FacilitiesModel;
use App\Models\Umroh\UmrohModel;
use App\Models\Umroh\UmrohReviewModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUlids; //use has uuid

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function travel(): HasOne //done
    {
        return $this->hasOne(TravelModel::class, 'user_id', 'id');
    }

    public function staff(): HasOne //done
    {
        return $this->hasOne(StaffModel::class, 'user_id', 'id');
    }

    public function subscriber(): HasOne //done
    {
        return $this->hasOne(SubscriberModel::class, 'user_id', 'id');
    }

    public function comparison(): HasMany //done
    {
        return $this->hasMany(ComparisonModel::class, 'user_id', 'id');
    }

    public function wishlist(): HasMany //done
    {
        return $this->hasMany(WishlistModel::class, 'user_id', 'id');
    }

    public function umroh(): HasMany //done
    {
        return $this->hasMany(UmrohModel::class, 'user_id', 'id');
    }

    public function umroh_review(): HasMany //done
    {
        return $this->hasMany(UmrohReviewModel::class, 'user_id', 'id');
    }

    public function plane(): HasMany //tidak usah belongsto
    {
        return $this->hasMany(PlaneModel::class, 'user_id', 'id');
    }

    public function hotel(): HasMany //tidak usah belongsto
    {
        return $this->hasMany(HotelModel::class, 'user_id', 'id');
    }

    public function cities(): HasMany //tidak usah belongsto
    {
        return $this->hasMany(CitiesModel::class, 'user_id', 'id');
    }

    public function credits(): HasMany //tidak usah belongsto
    {
        return $this->hasMany(CreditsModel::class, 'user_id', 'id');
    }

    public function facilities(): HasMany //tidak usah belongsto
    {
        return $this->hasMany(FacilitiesModel::class, 'user_id', 'id');
    }
}
