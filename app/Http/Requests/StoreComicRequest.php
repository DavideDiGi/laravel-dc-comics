<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'comic-title' => 'required|max:255',
            'comic-description' => 'nullable',
            'comic-thumb' => 'nullable',
            'comic-price' => 'required',
            'comic-serie' => 'required',
            'comic-sale-date' => 'required',
            'comic-type' => 'nullable'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'comic-title.required' => 'INSERIRE TITOLO',
            'comic-price.required' => 'INSERIRE PREZZO',
            'comic-serie.required' => 'INSERIRE SERIE',
            'comic-sale-date.required' => 'INSERIRE DATA',
        ];
    }
}
