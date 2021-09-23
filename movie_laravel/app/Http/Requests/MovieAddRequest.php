<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieAddRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'year'=>'required',
            'duration'=>'required',
            'sound'=>'required',
            'director'=>'required',
            'in_the_cast'=>'required',
            'description'=>'required',
            'movie_link'=>'required',
            'image'=>'required',
            ];
    }
}
