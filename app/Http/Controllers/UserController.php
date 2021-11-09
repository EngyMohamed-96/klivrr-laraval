<?php

namespace App\Http\Controllers;

//use App\Role;
//use App\Simulation;
use App\User;
use App\Http\Requests\UserRequest;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use JoeDixon\Translation\Drivers\Translation;
use PhpParser\JsonDecoder;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private $translation;
    public function __construct(Translation $translation)
    {
        //$this->authorizeResource(User::class);
        $this->translation = $translation;
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model): \Illuminate\View\View
    {
        //$this->authorize('manage-users', User::class);

        return view('users.index', ['users' => $model->paginate(12)]);
    }


    /**
     * Display user information
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */

    public function show(User $user)
    {
        $languages = $this->translation->allLanguages();
        return view('users.view', ['user' => $user, 'languages' => $languages]);
    }

    /**
     * Show the form for creating a new user
     *
     * @param  \App\Role  $model
     * @return \Illuminate\View\View
     */
    public function create(Role $model): \Illuminate\View\View
    {
        $languages = $this->translation->allLanguages();
        return view('users.create', ['languages' => $languages ,'roles' => $model->get(['id', 'name' , 'description'])]);
    }

    /**
     * Store a newly created user in storage
     *
     * @param UserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function store(UserRequest $request, User $user): RedirectResponse
    {
        $user->create($request->merge([
            'picture' => $request->photo ? $request->photo->store('profile', 'public') : null,
            'password' => Hash::make($request->get('password'))
        ])->all());
        $users = User::all();
        //return view('users.index', ['users' => $users->paginate(12)]);

        return redirect()->route('users.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @param  \App\Role  $model
     * @return \Illuminate\View\View
     */
    public function edit(User $user): \Illuminate\View\View
    {
        $languages = $this->translation->allLanguages();
        return view('users.edit', ['user' => $user, 'languages' => $languages]);
    }

    /**
     * Update the specified user in storage
     *
     * @param UserRequest $request
     * @param  \App\User  $user
     * @return RedirectResponse
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $hasPassword = $request->get("password");
        $user->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('profile', 'public') : $user->picture,
                'password' => Hash::make($request->get('password'))
            ])->except([$hasPassword ? '' : 'password'])
        );
        return redirect()->route('users.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param \App\User $user
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user): RedirectResponse
    {
//        $user->simulations()->delete();
//        $user->simulationSessions()->delete();
//        $user->BoardSetups()->delete();
        $user->delete();

        return redirect()->route('users.index')->withStatus(__('User successfully deleted.'));
    }
    /**
     * Remove the specified user from storage
     *
     * @return View
     */
    public function trainerDashboard(): View
    {
        $trainer = Auth::user();
        $locale = auth()->user()->language ? auth()->user()->language : 'en';
        $trans = trans('simulation',[],$locale);
        if(Auth::user()->isAdmin())
           $available_teams = Simulation::all();
        else
            $available_teams = $trainer->simulations;
        return view('trainer.dashboard', [
            'available_teams' => $available_teams,
            'trans' => $trans,
            ]);
    }

    public function getTrainerSimulations(Request $request)
    {
        $data = $request->all();
        $rules = [
            'trainer_id' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
        $trainer = User::where('id', $request['trainer_id'])->first();
        if($trainer->isAdmin() || $trainer->isTrainer() ||  $trainer->isSupervisor())
            {
                $simulations = $trainer->simulations()->where('group_id', null)->get();
                $response = '';
                foreach ($simulations as $simulation)
                {
                    $response .= '<option value="' .  $simulation->id . '">' .  $simulation->name . '<' . '/option>' . '\n';
                }
                $res['simulations'] = $response;
                $res['statusCode'] = 205;
                return  json_encode($res);
            }
        else
            {
                $response['type'] = "Not a Trainer";
                $response['statusCode'] = 440;
                $response['statusDescription'] = $request['trainer_id'];
                return json_encode($response);
            }
        }
        else{
            $response['type'] = "SimulationResponse";
            $response['statusCode'] = 440;
            $response['statusDescription'] = $validator->errors()->all();
            return json_encode($response);
        }
    }

    /**
     * Get the specified user mentored teams
     *
     * @return JsonResponse
     */
    public function getMentored(): JsonResponse
    {
        $mentoring_ids = json_decode(Auth::user()->mentoring);
        if($mentoring_ids){
            $mentoring = Simulation::find($mentoring_ids);
            return response()->json($mentoring, 200);
        } else if(Auth::user()->isAdmin())
        {
            $mentoring = Simulation::all();
            return response()->json($mentoring, 200);
        } else{
            return response()->json([], 200);
        }
    }

    /**
     * Get the specified user mentored teams
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function storeMentored(Request $request): JsonResponse
    {
        $trainer = Auth::user();
        $trainer->mentoring = $request->all();
        $trainer->save();
        return response()->json($trainer->mentoring, 200);
    }

    public function deleteLanguage($language)
    {
        File::deleteDirectory(resource_path('lang/' . $language));
        File::delete(File::glob(resource_path('lang/' . $language . '.*')));
        return redirect()->back()->withStatus(__('Language successfully deleted.'));
    }
}
