<?php

namespace App\Http\Requests\API\v1;

use Illuminate\Foundation\Http\FormRequest;

class WishStoreRequest extends FormRequest
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
            'from' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'wish' => [
                'required',
                'string',
                'min:10',
            ]
        ];
    }


    public function attributes()
    {
        return [
            'from' => 'Dari',
            'wish' => 'Untaian Doa'
        ];
    }
}
