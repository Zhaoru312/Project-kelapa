<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updategambar_produkRequest extends FormRequest
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
            'produk_id' => 'required|exists:produks,id',
            'kode' => 'required|string|max:255|unique:gambar_produks,kode,' . $this->route('gambar_produk')->id,
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
