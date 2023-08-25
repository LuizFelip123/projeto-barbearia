<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Carbon\Carbon;

class DataController extends Controller
{
    //
    public function index(){
        $dataAtual = Carbon::now();
       
        return view('horario', ['datas'=>  Data::whereDate('data', '>=', $dataAtual)
        ->get()]);
    }
 
}
