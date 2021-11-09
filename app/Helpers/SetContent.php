<?php
use App\Helpers\Helper;
  if(!function_exists("getContent")){
      function getContent($key){
         return Helper::getContent($key);
      }
  }
  if(!function_exists("getImage")){
    function getImage($key){
       
       return Helper::getImage($key); 
    }
}