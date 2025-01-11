<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'brand_name' => 'required|string|max:255',
            'price_per_day' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ];
    }

    /**
     * Define custom validation messages for the request.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'image.required' => 'Gambar wajib diunggah.',
            'image.string' => 'Gambar harus berupa teks.',
            'image.url' => 'Gambar harus berupa URL yang valid.',
            'brand_name.required' => 'Nama merek wajib diisi.',
            'brand_name.string' => 'Nama merek harus berupa teks.',
            'brand_name.max' => 'Nama merek tidak boleh lebih dari 255 karakter.',
            'price_per_day.required' => 'Harga per hari wajib diisi.',
            'price_per_day.integer' => 'Harga per hari harus berupa angka.',
            'price_per_day.min' => 'Harga per hari tidak boleh kurang dari 0.',
            'stock.required' => 'Harga per jam wajib diisi.',
            'stock.integer' => 'Harga per jam harus berupa angka.',
            'stock.min' => 'Harga per jam tidak boleh kurang dari 0.',
        ];
    }
}
