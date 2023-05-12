<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required' ,
            'description' => 'required' ,
            'thumb' => 'nullable|url',
            'price' => 'required' ,
            'series' => 'required' ,
            'sale_date' => 'required|date' ,
            'type' => 'required' ,
            'artists' => 'required' ,
            'writers' => 'required' ,
        ];
    }

    public function messages()
    {
        return [
            'title' => 'Really?! A comic without a title!!!',
            'thumb' => 'Give me a URL or gtfo',
            'price' => 'I like money: the price field is REQUIRED'
        ];
    }
}
