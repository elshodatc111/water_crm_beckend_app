<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBalanceRequest extends FormRequest{
    public function authorize(): bool{
        return $this->user() && $this->user()->type === 'admin';
    }
    public function rules(): array{
        return [
            'water_price' => 'required|integer|min:0',
            'dishes_price' => 'required|integer|min:0',
        ];
    }
    public function messages(){
        return [
            'water_price.required' => 'Suv narxi majburiy.',
            'water_price.integer' => 'Suv narxi butun son bo‘lishi kerak.',
            'water_price.min' => 'Suv narxi manfiy bo‘lishi mumkin emas.',
            'dishes_price.required' => 'Idish narxi majburiy.',
            'dishes_price.integer' => 'Idish narxi butun son bo‘lishi kerak.',
            'dishes_price.min' => 'Idish narxi manfiy bo‘lishi mumkin emas.',
        ];
    }
}
