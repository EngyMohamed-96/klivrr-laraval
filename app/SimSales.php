<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
class SimSales extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $table = 'simulations';
    protected $fillable = [
        'name',
        'trainer_id',
        'status',
        'start_date',
        'end_date',
        'simulation_code',
        'invite',
        'board_state',
        'group_id',
        'quick_setup',
    ];

    public function trainer(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function trainees(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Trainee::class);
    }
}
