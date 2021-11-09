<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'banner_img', 'logo_img', 'favicon_img', 'login_img', 'banner_text', 'mail_driver', 'mail_host' , 'mail_port', 'mail_username',
        'mail_password', 'mail_encryption' , 'mail_from_name'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function banner_path()
    {
        return "/storage/{$this->banner_img}";
    }

    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function logo_path()
    {
        return "/storage/{$this->logo_img}";
    }

    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function favicon_path()
    {
        return "/storage/{$this->favicon_img}";
    }

    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function login_path()
    {
        return "/storage/{$this->login_img}";
    }
}
