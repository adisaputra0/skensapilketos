<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateKandidatRequest extends FormRequest
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
        $id = $this->segment(2);
        return [
            "nisn" => [
                'required',
                Rule::unique('kandidats', 'nisn')->ignore($id, "id_kandidat"),
            ],
            "no" => [
                'required',
                Rule::unique('kandidats', 'no')->ignore($id, "id_kandidat"),
            ],
            "nama" => "required",
            "nama_panggilan" => "required",
            "visi_misi$id" => "required",
        ];
    }
}
