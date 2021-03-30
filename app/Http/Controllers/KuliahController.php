<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class KuliahController extends Controller
{
    public function index(){
        $users = Users::where('id_user',18064)->first();

        return view('index',['users' => $users]);
        // dd($users);
    }
}
