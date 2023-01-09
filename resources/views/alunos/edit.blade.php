<x-layout title="Editar Aluno '{{ $aluno->nome }}'">
    <x-alunos.form :action="route('alunos.update', $aluno->id)"
        :nome="$aluno->nome"
        :idade="$aluno->idade"
        :tipocadastro="$aluno->tipoCadastro"
        :turma="$aluno->turma"
        :ano="$aluno->ano"
        :responsavel="$aluno->responsavel"
        :reprovas="$aluno->qtdereprovas"
        :escolaanterior="$aluno->escolaanterior">
    </x-alunos.form>
</x-layout>
