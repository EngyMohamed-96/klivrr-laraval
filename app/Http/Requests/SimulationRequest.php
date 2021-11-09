<?php

namespace App\Http\Requests;

use App\Role;
use App\Trainee;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SimulationRequest extends FormRequest
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
            'trainees' => [
                'required',
            ],
            'trainees.*' => [
                'required', 'exists:'.(new Trainee)->getTable().',id'
            ],
            'status' => [
                'required',
            ],
//            'invite' => [
//                'required', 'numeric',
//            ],
            'start_date' => [
                'required',
            ],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
//    public function attributes()
//    {
//        return [
//            'role_id' => 'role',
//        ];
//    }
}
