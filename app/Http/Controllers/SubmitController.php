<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\links;
class SubmitController extends Controller
{
    public function index(){
     $data=links::all();
        return view('submission',compact('data'));
    }

    public function back(){
     return redirect ('submit');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new links();
        $data->matakuliah=$request->get('matakuliah');
        $data->judul_tugas=$request->get('judul_tugas');
        $data->link=$request->get('link');
        $data->save();
     return redirect ('submit');
    }

    public function delete($id){
     $data=links::find($id);
        $data->delete();
        return back();
    }

    public function edit($id){
     $data=links::find($id);
     return view('edit',compact('data'));
    }

    public function update(Request $request, $id){     
     $data = links::findOrFail($id);
        $data->matakuliah=$request->get('matakuliah');
        $data->judul_tugas=$request->get('judul_tugas');
        $data->link=$request->get('link');
        $data->save();
     return redirect ('submit')->with('alert-success','Data berhasil Diubah.');
    }

    public function read($id){
     $data=links::find($id);
     return view('read',compact('data'));
    }
}