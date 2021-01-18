<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreNewUserRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {
        return [
            'email' => 'required',
            'name' => 'required',
            'section' => 'required|string',
        ];
    }
}
