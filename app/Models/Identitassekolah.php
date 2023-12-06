<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitassekolah extends Model
{
    use HasFactory;
    protected $table = 'identitassekolahs';
    protected $primaryKey = 'id_identitassekolah';

    protected $guarded = ['id_identitassekolah'];
}
