<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tb_tarefas;
use Illuminate\Contracts\View\View;

class AllTarefaController extends Controller
{
    public function index(){
       
        /*Nome da classe e arquivos iguais*/
        $series = Tb_tarefas::all();

        return View('index')->with('series',$series);

    }
}
