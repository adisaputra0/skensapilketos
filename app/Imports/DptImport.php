<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;

class DptImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure, WithUpserts
{

    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $pass = rand(1000,9999);
        return new User([
            'nama' => $pass,
            'username' => $row['username'],
            'password' => bcrypt($pass),
            'jenis_kelamin' => $row['jenis_kelamin'],
            'kelas' => $row['username'],
        ]);
    }

    public function rules(): array
    {
        return [
            'username' => 'required',
            'jenis_kelamin' => 'required',
        ];
    }

    public function uniqueBy()
    {
        return 'username';
    }
}
