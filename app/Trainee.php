<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trainee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'title', 'picture', 'pass_code', 'gender'
    ];
    /**
     * @var mixed
     */
    private $picture;

    /**
     * Get the simulations of the trainer
     *
     * @return BelongsToMany
     */
    public function simsales(): BelongsToMany
    {
        return $this->belongsToMany(SimSales::class );
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
