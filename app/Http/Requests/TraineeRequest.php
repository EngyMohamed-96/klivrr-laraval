<?php

namespace App\Http\Requests;

use App\Trainee;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TraineeRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => [
                'required', 'min:3'
            ],
            'email' => [
                'required', 'email', Rule::unique((new Trainee)->getTable())->ignore($this->route()->trainee->id ?? null)
            ],
            'title' => [
                'required', 'min:3'
            ],
            'gender' => [
                'required'
            ]
        ];
    }

}
