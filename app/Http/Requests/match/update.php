<?php

namespace App\Http\Requests\match;

use Illuminate\Foundation\Http\FormRequest;

class update extends FormRequest
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


            "team1_id"=>"required|exists:teams,id",
            "team2_id"=>"required|exists:teams,id",
            "date"=>"required"

        ];
    }
}
