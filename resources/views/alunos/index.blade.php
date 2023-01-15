<x-layout title="Alunos">
    <div class="container mt-5">
        <h3 class="">Central de Alunos - Sistema Escolar Regional</h3>
        @isset($mensagem)
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endisset
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
                        <td>{{ $aluno->qtdereprovas }}</td>
                        <td>{{ $aluno->data_cadastro }}</td>
                        <td>
                            <span class="d-flex">
                                <a href=" {{ route('alunos.edit', $aluno->id) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="post" class="ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">X</button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
<script></script>
