<?php

namespace App\Http\Controllers;

use App\Content;
use App\Page;
use App\Helpers\Util;
use App\Helpers\Helper;
use App\Image;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($page_name ='home-page' ) 
    {      
        Helper::setLang();
        // get current page information from pages data 
        $util = new Util();
        $page_data = $util->getRequestedPageData($page_name);
       
         // get page keys from contents table (return array of objects)
        $page_keys = Content::where('page_id', '=' ,$page_data->page_id)->get();
        $page_images = Image::where('page_id', '=' ,$page_data->page_id)->get();
        
        $page_title = $page_data->page_title;
         
        $page_description = 'Some description for the page';
        
        // convert to object then to json
        $page_keys =  json_encode($this->arrayToObject($page_keys));
        $page_images =  json_encode($this->arrayToObject($page_images));
        Helper::setPageKeys($page_keys);
        Helper::setPageImages($page_images);
      //  return $page_keys;
       return view('klivvr.'.$page_title, compact('page_title', 'page_description','page_keys','page_images'));
    }

    // method to convert an array of objects to an object
    private function array_to_obj($array, $obj)
    {
       
      foreach ($array as $item => $value)
      {
        if (is_array($value))
        {
        $obj->$item = new \stdClass();
        $this->array_to_obj($value, $obj->$item);
        }
        else
        {
          $key = $value->key;
          $obj->$key = $value;
        }
      }
    return $obj;
    }
  
    function arrayToObject($array)
    {
     $object= new \stdClass();
     return $this->array_to_obj($array,$object);
    }
    public function changeLocale (Request $request,$page_name) {
      Session::put('locale', $request->lang);
      return redirect()->back();
  }
}
