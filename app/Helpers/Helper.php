<?php
namespace App\Helpers;
use Session;
class Helper
{  
    private static $page_keys;
    private static $page_images;
    private static $lang;
    
    public static function setPageKeys($page_keys){
        self::$page_keys= $page_keys;
    }
    public static function setPageImages($page_images)
    {
        self::$page_images= $page_images;
        
    }
    public static function setLang(){
        // get current locale
        $locale = Session::get('locale');
        $rtl = ($locale == 'ar');
        self::$lang = $rtl;
    }
    public static function getContent($key)
    {
        // decode the json of $page_keys to an object 
        $keys = json_decode(self::$page_keys);

        if(!property_exists($keys, $key)) return '...';
        if(self::$lang) return  $keys->$key->value_ar;
        return $keys->$key->value_en;
    
      
        
    }
    public static function getImage($key)

    {
        
        // decode the json of $page_keys to an object 
        $keys = json_decode(self::$page_images);

        if(!property_exists($keys, $key)) return '...';
        
       
        return $keys->$key->src;
        
    }
    
}
