<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zooController extends Controller
{
   public function binatang(){
       $binatang =[["A001", "Kijang", 1],
           ["A002", "Buaya", 10],
           ["A003", "Kanguru", 8],
           ["A004", "Panda", 7],
           ["A005", "Harimau", 4],
           ["A006", "Kelinci", 15],
           ["A007", "Kuda", 12]];
       return view('binatang')
           ->with('binatang', $binatang);
   }

   public function staff(){
       $staff =[["S001", "Rani","Kijang" ],
           ["S002", "Layla", "Buaya"],
           ["S003", "Yeonjun","Kanguru"],
           ["S004", "Ningning", "Panda"],
           ["S005", "Cleo", "Harimau"],
           ["S006", "Wina", "Kelinci"],
           ["S007", "Kevin", "Kuda"]];
       return view('staff')
           ->with('staff', $staff);
   }
}
