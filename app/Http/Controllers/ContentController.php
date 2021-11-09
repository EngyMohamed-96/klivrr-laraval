<?php

namespace App\Http\Controllers;

use App\Content;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Util;
use App\Image;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\App;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page_name)
    { 
        
        // get current page information from pages data 
        $util = new Util();
        $page_data = $util->getRequestedPageData($page_name);
        $pages = Page::all();
        $images =  (Image::all());

        // get page keys (return array of objects)     
       
        $images = Image::where('page_id', '=', $page_data->page_id)->get();
        $edit = 1;
        if(isset($_GET['edit'])){
            if(is_numeric($_GET['edit']) && ($_GET['edit']==0 || $_GET['edit']==1 ) ){

            $edit = $_GET['edit'];
            $page_keys = Content::where('page_id', '=', $page_data->page_id)->where('edit',$edit)->get();
            }else{
            return redirect()->back();
            }
           
        }else{
            $page_keys = Content::where('page_id', '=', $page_data->page_id)->where('edit', 1)->get();
        }
        //  return $pages;
        return view('dashboard.index', compact('pages', 'page_keys', 'images','edit'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated_content = Content::find($id);
        // dd($updated_content);
        $updated_content->value_en =  $request->value_en;
        $updated_content->value_ar =  $request->value_ar;
        $updated_content->edit = 1;

        $updated_content->save();
        return redirect()->back();
    }

    public function updateImage(Request $request, $id)
    {
        $image = Image::find($id);
        $src = $request->image;
        $src_new_name = time() . $src->getClientOriginalName();
        $src->move('uploads/home-page', $src_new_name);
        $image->src = 'uploads/home-page/' . $src_new_name;
        $image->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
