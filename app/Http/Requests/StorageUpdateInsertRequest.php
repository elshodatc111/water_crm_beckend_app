<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateInsertRequest extends FormRequest{
    public function authorize(): bool{
        return $this->user() && $this->user()->type === 'admin';
    }
    public function rules(): array{
        return [
            'dishes_count' => 'required',
        ];
    }
    public function messages(): array{
        return [
            'dishes_count.required' => 'Malumotlar kiritish majburiy.',
        ];
    }
}
