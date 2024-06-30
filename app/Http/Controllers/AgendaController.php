<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Horario;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Criar um objeto Carbon para a data digitada pelo usuário
            $dataDigitada = Carbon::createFromFormat('Y-m-d', $request['data']);
        } catch (InvalidFormatException $e) {
            return redirect('adicionar')->with('error', 'Formato de data inválido.');
        }

        // Obter a data e hora atuais
        $dataAtual = Carbon::today();
        $horarioAtual = Carbon::now();

        // Verificar se a data digitada é anterior à data atual
        if ($dataDigitada->lessThan($dataAtual)) {
            return redirect('adicionar')->with('error', 'A data digitada é anterior à data atual.');
        }

        // Verificar se a data digitada é igual à data atual para checar o horário
        if ($dataDigitada->isSameDay($dataAtual)) {
            try {
                // Criar um objeto Carbon para o horário digitado pelo usuário
                $horarioDigitado = Carbon::createFromFormat('H:i', $request['hora']);
            } catch (InvalidFormatException $e) {
                return redirect('adicionar')->with('error', 'Formato de horário inválido.');
            }

            // Verificar se o horário atual é maior que o horário digitado
            if ($horarioAtual->format('H:i') > $horarioDigitado->format('H:i')) {
                return redirect('adicionar')->with('error', 'O horário digitado é menor do que o horário atual, por favor digite um próximo horário.');
            }
        }

        $dia = Data::firstOrCreate(['data' => $request['data']]);

        $horario = new Horario;
        $horario->data_id = $dia->id;
        $horario->hora = $request['hora'];

        $horario->save();

        return redirect('adicionar')->with('success', 'Horário adicionado com sucesso');
    }

    public function index()
    {
        // Recupera todos os horários e datas
        $todosHorarios = Horario::select(
            'horarios.*',
            'horarios.id as horario_id',
            'datas.id as data_id',
            'datas.*'
        )
            ->join('datas', 'horarios.data_id', '=', 'datas.id')
            ->orderBy('datas.data', 'desc')
            ->get();

        $dataAtual = Carbon::now();

        $data = Data::whereDate('data', $dataAtual->toDateString())->first();

        if ($data == null) {
            $horariosHoje = [];
        } else {
            $horariosHoje = $data->horarios;
        }

        return view('adicionar', ['horariosHoje' => $horariosHoje, 'todosHorarios' => $todosHorarios]);
    }

    public function destroy($id, $data_id)
    {
        Horario::findOrFail($id)->delete();
        Data::findOrFail($data_id)->delete();
        return redirect('adicionar');
    }
}
