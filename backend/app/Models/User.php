<?php

namespace App\Models;

use App\Enums\Gender;
use App\Models\Traits\UserLogic;
use DateTime;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string $id
 * @property string $name
 * @property string $gender
 * @property string $data_transfer_token
 * @property string $icon_type
 * @property DateTime $last_synced_at
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use UserLogic;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'gender',
        'data_transfer_token',
        'icon_type',
        'last_synced_at',
//        'email',
//        'password',
    ];

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
        'last_synced_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function currentTermsOfService()
    {
        return $this->belongsTo(TermsOfService::class,'terms_of_service_id');
    }

    /**
     * @return BelongsTo
     */
    public function currentPrivacyPolicy()
    {
        return $this->belongsTo(PrivacyPolicy::class,'privacy_policy_id');
    }
}
