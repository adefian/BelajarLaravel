<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class barangRequest extends FormRequest
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
            'nama'=>'required',
            'type'=>'required',
            'harga'=>'required',
            'jumlah'=>'required',
            
        ];
    }
}
