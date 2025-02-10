<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateOutputRequest extends FormRequest{
    public function authorize(): bool{
        return $this->user() && $this->user()->type === 'admin';
    }
    public function rules(): array{
        return [
            'count' => 'required|integer|min:0',
            'status' => 'required',
        ];
    }
    public function messages(): array{
        return [
            'count.required' => 'Malumotlar kiritish majburiy.',
            'status.required' => 'Malumotlar kiritish majburiy.',
        ];
    }
}
