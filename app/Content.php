<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'key', 'value-en', 'value-ar', 'edit', 'page_id','created_at' ,'updated_at'
    ];
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}
