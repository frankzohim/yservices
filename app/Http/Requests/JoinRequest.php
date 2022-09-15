<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinRequest extends FormRequest
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
            'civility'=>['required'],
            'name'=>['required'],
            'username'=>['required'],
            'phone_number'=>['required'],
            'email'=>['required','email'],
            'postal_code'=>['required'],
            'informations'=>['required'],
            'job'=>['required'],
            'available'=>['required'],
            'diploma'=>['required'],
            'cv'=>['required','file'],
            'year_of_experience'=>['required','integer'],
            'diploma_file'=>['required','file'],
        ];
    }
}
