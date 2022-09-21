<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddReadingMaterialsRequest extends FormRequest
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
            'material_filename' => [
                'required',
                'string',
            ],
            'reading_material' => [
                'required',
                'mimes:docx,pdf,ppt,doc'
            ],
        ];
    }
}
