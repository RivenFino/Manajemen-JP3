<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RiwayatRequest extends FormRequest
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
            'id_guru' => 'required|string',
            'id_mapel' => 'required|string',
            'type' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'rombel' => 'required|string|max:255',
            'alokasi_jp' => 'required|string|max:255',
            'total_jp' => 'required|string|max:255',
        ];
    }
}
