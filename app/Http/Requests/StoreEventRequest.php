<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Validation\ValidationException;

class UpsertEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image_path' => 'nullable|image',
            'name' => 'required|max:500',
            'event_date' => 'required|date',
            'link' => 'nullable|string',
            'description' => 'required|max:2000',
            'category_name_id' => 'nullable|integer'
        ];
    }
}
