<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
        public function senin()
        {
            $data = Content::all();
            return view('content.index', ['data'=>$data]);
        }
        public function selasa()
        {
          $tb_selasa = DB::select('select * from tb_selasa');
          return view('tampil', ['tb_selasa'=>$tb_selasa]);
        }
        public function rabu()
        {
          $tb_rabu = DB::select('select * from tb_rabu');
          return view('rabu', ['tb_rabu'=>$tb_rabu]);
        }
        public function kamis()
        {
          $tb_kamis = DB::select('select * from tb_kamis');
          return view('kamis', ['tb_kamis'=>$tb_kamis]);
        }
        public function jumat()
       {
         $tb_jumat = DB::select('select * from tb_jumat');
         return view('jumat', ['tb_jumat'=>$tb_jumat]);
       }
       public function seninte()
       {
        $tb_senin_te = DB::select('select * from tb_senin_te');
           return view('seninTE', ['tb_senin_te'=>$tb_senin_te]);
       }
       public function selasate()
       {
         $tb_selasa_te = DB::select('select * from tb_selasa_te');
         return view('selasate', ['tb_selasa_te'=>$tb_selasa_te]);
       }
       public function rabute()
       {
         $tb_rabu_te = DB::select('select * from tb_rabu_te');
         return view('rabute', ['tb_rabu_te'=>$tb_rabu_te]);
       }
       public function kamiste()
       {
         $tb_kamis_te = DB::select('select * from tb_kamis_te');
         return view('kamiste', ['tb_kamis_te'=>$tb_kamis_te]);
       }
       public function jumatte()
       {
         $tb_jumat_te = DB::select('select * from tb_jumat_te');
         return view('jumatte', ['tb_jumat_te'=>$tb_jumat_te]);
       }
       public function seninsi()
       {
        $tb_senin_si = DB::select('select * from tb_senin_si');
           return view('seninsi', ['tb_senin_si'=>$tb_senin_si]);
       }
       public function selasasi()
       {
         $tb_selasa_si = DB::select('select * from tb_selasa_si');
         return view('selasasi', ['tb_selasa_si'=>$tb_selasa_si]);
       }
       public function rabusi()
       {
         $tb_rabu_si = DB::select('select * from tb_rabu_si');
         return view('rabusi', ['tb_rabu_si'=>$tb_rabu_si]);
       }
       public function kamissi()
       {
         $tb_kamis_si = DB::select('select * from tb_kamis_si');
         return view('kamissi', ['tb_kamis_si'=>$tb_kamis_si]);
       }
       public function jumatsi()
       {
         $tb_jumat_si = DB::select('select * from tb_jumat_si');
         return view('jumatSI', ['tb_jumat_si'=>$tb_jumat_si]);
       }
       public function seninmr()
       {
        $tb_senin_mr = DB::select('select * from tb_senin_mr');
           return view('seninmr', ['tb_senin_mr'=>$tb_senin_mr]);
       }
       public function selasamr()
       {
         $tb_selasa_mr = DB::select('select * from tb_selasa_mr');
         return view('selasamr', ['tb_selasa_mr'=>$tb_selasa_mr]);
       }
       public function rabumr()
       {
         $tb_rabu_mr = DB::select('select * from tb_rabu_mr');
         return view('rabumr', ['tb_rabu_mr'=>$tb_rabu_mr]);
       }
       public function kamismr()
       {
         $tb_kamis_mr = DB::select('select * from tb_kamis_mr');
         return view('kamismr', ['tb_kamis_mr'=>$tb_kamis_mr]);
       }
       public function jumatmr()
       {
         $tb_jumat_mr = DB::select('select * from tb_jumat_mr');
         return view('jumatmr', ['tb_jumat_mr'=>$tb_jumat_mr]);
       }
       public function senintb()
       {
        $tb_senin_tb = DB::select('select * from tb_senin_tb');
           return view('senintb', ['tb_senin_tb'=>$tb_senin_tb]);
       }
       public function selasatb()
       {
         $tb_selasa_tb = DB::select('select * from tb_selasa_tb');
         return view('selasatb', ['tb_selasa_tb'=>$tb_selasa_tb]);
       }
       public function rabutb()
       {
         $tb_rabu_tb = DB::select('select * from tb_rabu_tb');
         return view('rabutb', ['tb_rabu_tb'=>$tb_rabu_tb]);
       }
       public function kamistb()
       {
         $tb_kamis_tb = DB::select('select * from tb_kamis_tb');
         return view('kamistb', ['tb_kamis_tb'=>$tb_kamis_tb]);
       }
       public function jumattb()
       {
         $tb_jumat_tb = DB::select('select * from tb_jumat_tb');
         return view('jumattb', ['tb_jumat_tb'=>$tb_jumat_tb]);
       }
    
    
}
