<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkUpdateRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge(['id' => $this->route('id')]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @todo Get database table name from model
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|integer|exists:links,id',
            'title' => 'required|max:150',
            'link' => 'required|url|max:255',
            'color' => 'required|regex:/^(#[a-zA-Z0-9]{6})$/i',
            'sequence' => 'required|integer',
        ];

    }
}
