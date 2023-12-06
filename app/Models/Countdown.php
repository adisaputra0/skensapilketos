<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;
    protected $table = 'countdowns';
    protected $primaryKey = 'id_countdown';

    protected $guarded = ['id_countdown'];
}
