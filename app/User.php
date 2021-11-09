<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'picture', 'gender', 'language', 'title', 'company', 'phone',
        'website', 'time_zone', 'comm_email', 'comm_phone', 'account_status', 'address_line1' , 'address_line2',
        'post_code', 'city' , 'state', 'country', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * Get the simulations of the trainer
     *
     * @return HasMany
     */
    public function simsales(): HasMany
    {
        return $this->hasMany(SimSales::class , 'trainer_id');
    }

    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }

    /**
     * Get the path to the profile picture
     *
     * @return string
     */
    public function profilePicture(): string
    {
        if ($this->picture) {
            return "/storage/{$this->picture}";
        }

        if (!empty($this->gender) && $this->gender == 'male')
            return asset('img'). '/defaults/default-avatar-male.svg';
        if (!empty($this->gender) && $this->gender == 'female')
            return asset('img'). '/defaults/default-avatar-female.svg';

        return 'http://i.pravatar.cc/200';

    }


}
