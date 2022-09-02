<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name_en' => ['required', 'max:255'],
            'name_ar' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'between:1,999999.99'],
            'quantity' => ['nullable', 'integer', 'between:1,999'],
            'status' => ['nullable', 'in:0,1'],
            'code' => ['required', 'integer', 'digits:6', 'unique:products,code'],
            'details_en' => ['required'],
            'details_ar' => ['required'],
            'brand_id' => ['nullable', 'integer', 'exists:brands,id'],
            'subcategory_id' => ['required', 'integer', 'exists:subcategories,id'],
            'image' => ['required', 'max:1024', 'mimes:jpg,jpeg,png']
        ];
    }
}
