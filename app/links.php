<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class links extends Model
{
    protected $table="links";
 	protected $primaryKey="id";
 	protected $fillable=['matakuliah','judul_tugas','link'];
}
