<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Absen extends Controller{


public function absen(){
    $matakuliah = DB::select('select * from matakuliah');
          return view('Absen', ['matakuliah'=>$matakuliah]);
}



}