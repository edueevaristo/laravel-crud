<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Alunos::all();
        return view('alunos.index')->with('alunos', $alunos);
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {

        $nome = $request->input('nome');
        $idade = (int)$request->input('idade');
        $ano = $request->input('ano');
        $turma = $request->input('turma');
        $reprova = (int)$request->input('reprovas');
        $responsavel = $request->input('responsavel');

        $aluno = new Alunos();
        $aluno->nome = $nome;
        $aluno->idade = $idade;
        $aluno->ano = $ano;
        $aluno->sala = $turma;
        $aluno->qtde_reprovas = $reprova;
        $aluno->responsavel = $responsavel;
        $aluno->data_cadastro = date('d-m-Y H:i:s');

        $aluno->save();

        return redirect('/alunos');

        //Media de notas
        //Matrícula, transferência, rematrícula (feito)
        //Se for transferência, abrir input de escola anterior (feito)
        //SE rematricula, insere codigo para trazer os dados (em andamento, botao feito, falta trazer os dados do aluno);
        //Rematricula, criar campo no banco com o id do aluno (o mesmo vai conter o id da tabela mais o nome em maiusculo concatenado mais o ano atual);
    }

}
