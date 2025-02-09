<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStorageRequest extends FormRequest{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        return [
            'name' => 'required|string|max:255|unique:storages,name',
        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'Ombor nomini kiritish majburiy.',
            'name.string' => 'Ombor nomi matn bo‘lishi kerak.',
            'name.max' => 'Ombor nomi 255 ta belgidan oshmasligi kerak.',
            'name.unique' => 'Bunday nomli ombor allaqachon mavjud.',
        ];
    }

}
