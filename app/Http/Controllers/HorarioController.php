<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    //
    public function destroy($id){
        Horario::findOrFail($id)->delete();
        return redirect('adicionar');
    }
}
