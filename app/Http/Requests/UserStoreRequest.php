<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserStoreRequest extends FormRequest{
    public function authorize(): bool{
        return true; 
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role' => ['required', Rule::in(['guard', 'currer', 'admin'])],
        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'Ism maydoni majburiy.',
            'phone.required' => 'Telefon raqami majburiy.',
            'phone.unique' => 'Bu telefon raqami allaqachon ishlatilgan.',
            'email.required' => 'Email majburiy.',
            'email.unique' => 'Bu email allaqachon ishlatilgan.',
            'password.required' => 'Parol majburiy.',
            'password.min' => 'Parol kamida 8 ta belgidan iborat bo‘lishi kerak.',
            'role.required' => 'Rol tanlash majburiy.',
            'role.in' => 'Rol faqat "guard" yoki "currer" bo‘lishi mumkin.',
        ];
    }
}
