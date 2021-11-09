<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [
        'key', 'src','page_id','created_at' ,'updated_at'
    ];
    
    public function getSrcAttribute($src)
    {
        return asset($src);
    }
}
