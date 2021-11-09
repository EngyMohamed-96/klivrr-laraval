<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'slug','page_id'
    ];
    protected $dates = ['deleted_at'];
    public function content()
    {
        return $this->hasMany('App\Content');
    }
}