<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Setting;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use stdClass;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Setting::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Setting $setting)
    {
        $setting = Setting::where('id' , 1)->first();
        return view('settings.index', ['setting' => $setting]);
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
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(SettingRequest $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        $setting->update(
            $request->merge([
                'banner_img' => $request->banner ? $request->banner->store('settings', 'public') : $setting->banner_img,
                'logo_img' => $request->logo ? $request->logo->store('settings', 'public') : $setting->logo_img,
                'favicon_img' => $request->favicon ? $request->favicon->store('settings', 'public') : $setting->favicon_img,
                'login_img' => $request->login ? $request->login->store('settings', 'public') : $setting->login_img,
            ])->all()
        );

        Session::put('status','Application Settings successfully updated.');
        return view('settings.index', ['setting' => $setting , 'status' => 'Application Settings successfully updated.'])->withStatus(__('Application Settings successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }

}
