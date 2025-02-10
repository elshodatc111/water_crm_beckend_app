<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateRequest extends FormRequest{
    public function authorize(): bool{
        return $this->user() && $this->user()->type === 'admin';
    }

    public function rules(): array{
        return [
            'name' => 'required|string|max:255',
            'status' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Ombor nomi majburiy.',
            'name.string' => 'Suv ombor nomi string bo‘lishi kerak.',
            'status.required' => 'Status tanlash majburiy.',
        ];
    }
}
