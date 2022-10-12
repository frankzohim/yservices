<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevisRequest extends FormRequest
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
            'for_who'=>['required'],
            'type'=>['required'],
            'start_time'=>['required','string'],
            'civility'=>['required'],
            'firstname'=>['required','string'],
            'lastname'=>['required','string'],
            'email'=>['required','email'],
            'phone'=>['required','numeric'],
            'postal_code'=>['required','string'],
            'comments'=>['required','string'],
            'news'=>['required','boolean'],
            'accept_cgu'=>['required']
        ];
    }
}
