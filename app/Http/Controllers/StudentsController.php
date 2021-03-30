<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Students;
class StudentsController extends Controller
{
  
    public function submit(){
     return view('submit');
    }
    public function insert(Request $request){
      $data=new Students();
         $data->matakuliah=$request->get('matkul');
         $data->judul_tugas=$request->get('judul_tugas');
         $data->link=$request->get('link');
         $data->save();
      return redirect ('/');
     }
}