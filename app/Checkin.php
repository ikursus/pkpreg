<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $table = 'checkin';

    protected $fillable = [
        'user_id',
        'nama',
        'telefon',
        'email',
        'address',
        'suhu',
        'tarikh'
    ];
}
