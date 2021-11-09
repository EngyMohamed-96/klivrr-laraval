<?php

namespace App\Http\Controllers\Boards;

//use App\Events\FieldStateUpdated;
//use App\Events\MentorUpdate;
use App\Http\Controllers\Controller;
use App\Settings;
use App\SimSales;
use App\Trainee;
use App\Translation;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class SimSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\SimSales $simsales
     * @return \Illuminate\Http\Response
     */
    public function show(SimSales $simsales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\SimSales $simsales
     * @return \Illuminate\Http\Response
     */
    public function edit(SimSales $simsales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\SimSales $simsales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimSales $simsales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\SimSales $simsales
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimSales $simsales)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $simulation_code
     * @param null $passcode
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function run($simulation_code, $passcode = null)
    {
        $simulation = SimSales::where('simulation_code', $simulation_code)->firstOrFail();
        if(!$simulation->board_state){
            $setup = '[{"stock":'.json_encode(Config::get('constants.stock')).' }]';
            $simulation->board_state =  $setup;
            $simulation->save();
        }
        $isAuth = Auth::check();
        if ($simulation->status != 'published' && $isAuth == false) {
            return view('insurance.not-published', [
                'simulation' => $simulation,
            ]);
        }

        if (Carbon::now()->startOfDay() < Carbon::parse($simulation->start_date)->startOfDay() && $isAuth == false) {
            return view('insurance.not-started', [
                'simulation' => $simulation,
            ]);
        }

        if (Carbon::now()->startOfDay() > Carbon::parse($simulation->end_date)->startOfDay() && $isAuth == false) {
            return view('insurance.expired', [
                'simulation' => $simulation,
            ]);
        }

        if ($passcode) {
            $trainee = Trainee::where('pass_code', $passcode)->firstOrFail();
        } else {
            $trainee = null;
        }
        $trainer = $simulation->trainer;
        $trainees = $simulation->trainees;
        $setting = Settings::where('id', 1)->first();
        $all_languages = Config::get('constants.languages');

        $languages = array_values(array_filter(Schema::getColumnListing('translations'), function ($item) use ($all_languages) {
            if (array_key_exists($item, $all_languages)){
                return $item;
            }
        }));

        if (auth()->user()) {
            $locale = auth()->user()->language ? auth()->user()->language : 'en';
            app()->setLocale($locale);
        } else {
            $locale = 'en';
        }
        $trans = Translation::where('group', '=', 'general')->orWhere('group', '=', 'board')->get()->pluck($locale, 'key');
        return view('simsales.board', [
            'simulation' => $simulation,
            'trainer' => $trainer,
            'trainee' => $trainee,
            'trainees' => $trainees,
            'isTrainer' => $isAuth,
            'setting' => $setting,
            'locale' => $locale,
            'languages' => $languages,
            'trans' => $trans
        ]);
    }

    /**
     * store the specified simulation board state.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function storeUpdate(Request $request): JsonResponse
    {
        // todo: use $request['action'] for log record.
        $simulation = SimSales::findorfail($request['simulation_id']);
        $simulation->board_state = $request['fields'];
        if($request['actionState'] !== null){
            $simulation->show_action = $request['actionState'];
        }
        if($request['optionsState'] !== null){
            $simulation->show_options = $request['optionsState'];
        }
        $simulation->save();
//        event(new FieldStateUpdated($simulation));
//        event(new MentorUpdate($simulation));
        return response()->json($simulation->board_state, 200);
    }
}
