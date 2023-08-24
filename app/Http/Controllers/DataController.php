<?php

namespace App\Http\Controllers;

use App\Models\Data;

class DataController extends Controller
{
    //
    public function index(){
        
        return view('horario', ['datas'=> Data::all()]);
    }
 
}
