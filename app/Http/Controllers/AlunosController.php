<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(Request $request)
    {
        $alunos = Alunos::query()->orderBy('nome')->get();
        $mensagem = session('mensagem.sucesso');
        return view('alunos.index')
            ->with('alunos', $alunos)
            ->with('mensagem', $mensagem);
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {

        $nome = $request->input('nome');
        $idade = (int) $request->input('idade');
        $ano = $request->input('ano');
        $tipocadastro = $request->input('tipocadastro');
        $turma = $request->input('turma');
        $reprova = (int) $request->input('reprovas');
        $responsavel = $request->input('responsavel');
        $escolaanterior = $request->input('escolaanterior');

        $aluno = new Alunos();
        $aluno->nome = $nome;
        $aluno->idade = $idade;
        $aluno->ano = $ano;
        $aluno->tipocadastro = $tipocadastro;
        $aluno->turma = $turma;
        $aluno->qtdereprovas = $reprova;
        $aluno->responsavel = $responsavel;
        $aluno->data_cadastro = date('d-m-Y H:i:s');
        $aluno->escolaanterior = (empty($escolaanterior) ? "N/A" : $escolaanterior);
        $aluno->save();

        return to_route('alunos.index')->with('mensagem.sucesso', "Aluno '{$aluno->nome}' adicionado com sucesso.");;

    }

    public function destroy(Alunos $alunos)
    {
        $alunos->delete();
        return to_route('alunos.index')->with('mensagem.sucesso', "Aluno '{$alunos->nome}' removido com sucesso.");
    }

    public function edit(Alunos $aluno)
    {
        return view('alunos.edit')->with('aluno', $aluno);
    }

    public function update(Alunos $alunos, Request $request)
    {
        $alunos->fill($request->all());
        $alunos->save();
        return to_route('alunos.index')->with('mensagem.sucesso', "Atualização do Aluno '{$alunos->nome}' atualizado com sucesso");
    }


}
