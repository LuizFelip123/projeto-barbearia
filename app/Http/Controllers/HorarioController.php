<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
{
    //
    public function delete($id){


        Horario::findOrFail($id)->delete();
        return redirect('adicionar' );
    }

    public function joinUser(Request $request){

      $horario = Horario::findOrFail($request['horario']);
      $horario->user_id = Auth::id();
      $horario->update();
      return redirect('/horario');

    }




}
