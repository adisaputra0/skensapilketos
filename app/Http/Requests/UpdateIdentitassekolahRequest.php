<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIdentitassekolahRequest extends FormRequest
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
            "npsn" => "required",
            "nama_sekolah" => "required",
            "alamat_jalan" => "required",
            "desa" => "required",
            "kecamatan" => "required",
            "kabupaten" => "required",
            "kepala_sekolah" => "required",
            "nip" => "required",
        ];
    }
}
