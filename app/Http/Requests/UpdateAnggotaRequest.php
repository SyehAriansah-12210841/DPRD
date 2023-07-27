<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnggotaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'pendidikan' => 'required|string',
            'fraksi_id' => 'required|string',
            'jabatan' => 'required|string',
            'jabatan_fraksi' => 'required|string',
            'periode' => 'required|string',
            'dapil_id' => 'required|string',
            'gambar' => 'image',
            'badan_akd' => 'nullable|string',
            'jabatan_akd' => 'nullable|string',
            'komisi' => 'required|string',
            'jabatan_komisi' => 'required|string'
        ];
    }
}
