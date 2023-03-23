<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'url' => 'nullable',
            'cat_id' => 'nullable',
            'status' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter a title.',
            'title.string' => 'The title must be a string.',
            'image.image' => 'The file must be an image.',
            'image.max' => 'The file size must be less than :max kilobytes.',
        ];
    }
}
