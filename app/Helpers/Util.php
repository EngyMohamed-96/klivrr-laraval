<?php
namespace App\Helpers;
use App\Page;
class Util {
    public function getRequestedPageData($page_name){
        $pageData= new \stdClass();
        
         $pages = Page::all();
            foreach ($pages as $page){
                if($page_name == $page->slug){
                    $pageData->page_id =$page->page_id;
                    $pageData->page_title = $page->title;
                }
            }
            return $pageData;
    }
}