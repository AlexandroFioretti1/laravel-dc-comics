<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:7|max:25',
            'description' => 'required|min:1|max:5000',
            'thumb' => 'required|min:10|max:290',
            'price' => 'required|min:1|max:999',
            'series' => 'required|min:1|max:2000',
            'sale_date' => 'required|min:1|max:5000',
        ];
    }
}
