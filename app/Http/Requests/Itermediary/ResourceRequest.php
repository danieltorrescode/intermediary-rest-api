<?php

namespace App\Http\Requests\Itermediary;

use Illuminate\Foundation\Http\FormRequest;

class ResourceRequest extends FormRequest
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
					'name' => 'required|unique:resources|alpha|max:255',
					'url' => 'required'
        ];
    }
}
