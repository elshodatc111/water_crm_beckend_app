<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageStoreRequest extends FormRequest{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        return [
            'name' => 'required|string|max:255',
        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'Ombor nomini kiritish majburiy.',
            'name.string' => 'Ombor nomi string tipida bo\'lsin.',
        ];
    }
}
