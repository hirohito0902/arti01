<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'year' => 'required|string|max:100',
            'degree' => 'required|string|max:100',
            'category' => 'required|string|max:100',
        ];
    }
}
