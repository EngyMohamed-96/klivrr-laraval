<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'picture', 'company', 'phone',
        'website', 'time_zone', 'account_status', 'address_line1' , 'address_line2',
        'post_code', 'city' , 'state', 'country'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @var mixed
     */
    private $picture;

    /**
     * Get the path to the profile picture
     *
     * @return string
     */
    public function partnerLogo(): string
    {
        if ($this->picture) {
            return "/storage/{$this->picture}";
        }
        return asset('media/logos/simdustry.png');
    }

    public function partnerAdmin(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
