<?php

namespace App\Http\Requests\Animal;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'breed_id' => ['required', 'integer'],
            'gender_id' => ['required', 'integer'],
            'size_id' => ['required', 'integer'],
            'sterilization_id' => ['required', 'integer'],
            'age' => ['required'],
            'desc' => ['required', 'string'],
        ];
    }
}
