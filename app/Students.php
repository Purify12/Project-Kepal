<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table="links";
 	protected $primaryKey="id";
 	protected $fillable=['matkul','judul_tugas','link'];
}
