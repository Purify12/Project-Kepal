<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'id_user', 'username', 'password', 'nama',
        'nim', 'prodi', 'angkatan', 'status',
    ];
}
