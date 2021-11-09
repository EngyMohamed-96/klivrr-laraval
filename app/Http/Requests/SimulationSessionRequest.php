<?php

namespace App\Http\Requests;

use App\Simulation;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class SimulationSessionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3'
            ],
            'trainer_id' => [
                'required', 'exists:'.(new User)->getTable().',id'
            ],
            'simulations' => [
                'required'
            ],
            'simulations.*' => [
                'exists:'.(new Simulation)->getTable().',id'
            ],
        ];
    }

//    /**
//     * Get the validation attributes that apply to the request.
//     *
//     * @return array
//     */
//    public function attributes()
//    {
//        return [
//            'role_id' => 'role',
//        ];
//    }
}
