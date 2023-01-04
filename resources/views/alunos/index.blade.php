<x-layout title="Alunos">
    <div class="container mt-5">
        <h3 class="">Central de Alunos - Sistema Escolar Regional</h3>
        <hr class="divisor">
        </hr>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Qtde Reprovas</th>
                    <th scope="col">Matrículado Em</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->sala }}</td>
                        <td>{{ $aluno->ano }}</td>
                        <td>{{ $aluno->responsavel }}</td>
                        <td>{{ $aluno->idade }}</td>
                        <td>{{ $aluno->qtde_reprovas }}</td>
                        <td>{{ $aluno->data_cadastro }}</td>
                        <td>
                            <a href="/alunos"><i class="fa-solid fa-pen p-2"></i></a>
                            <a href="/alunos"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
<script></script>
