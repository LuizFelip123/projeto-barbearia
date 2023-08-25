<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
{
    //
    public function destroy($id){
        Horario::findOrFail($id)->delete();
        return redirect('adicionar');
    }
    public function joinUser(Request $request){
      $horario = Horario::findOrFail($request['horario']); 
      $horario->user_id = Auth::id();
      $horario->update();
      return redirect('/horario');

    }
}
