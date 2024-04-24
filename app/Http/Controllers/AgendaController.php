<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Horario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    //



    public function store(Request $request){
        $dia = new Data;

        $result =Data::where('data', $request['data'])->get();
        if($result->isEmpty()){
         $dia->data = $request['data'];
         $dia->save();
        }else{
            $dia = $result->first();
            $dia->save();
        }
        $horario = new Horario;
        $horario->hora = $request['hora'];

       $dia->refresh();
      $horario->data_id = $dia->id;
      $horario->save();
        return redirect('adicionar');
    }
    public function index(){
       $horarios = Horario::pluck('hora')->toArray();
       $dataAtual = Carbon::now();
       $data = Data::whereDate('data', $dataAtual->toDateString())->first();
        if($data == null){
            $horariosAtual =[];
        }else{
            $horariosAtual = $data->horarios ;
        }
       return view('adicionar', ['horariosHoje' => $horariosAtual], ['horarios' => $horarios]);

    }



}
