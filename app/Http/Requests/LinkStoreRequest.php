<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkStoreRequest extends FormRequest
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
            'title' => 'required|max:150',
            'link' => 'required|url|max:255',
            'color' => 'required|regex:/^(#[a-zA-Z0-9]{6})$/i',
            'sequence' => 'required|integer',
        ];

    }
}
