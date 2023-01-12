<x-layout title="Novo Aluno">
    <x-alunos.form :action="route('alunos.store')" :nome="old('nome')" :update="false"></x-alunos.form>
</x-layout>
