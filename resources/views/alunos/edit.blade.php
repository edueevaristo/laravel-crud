<x-layout title="Edição de Alunos">
    <form action="{{ route('alunos.update', $alunos->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="container mt-3 p-5">
            @csrf
            <h3 class="">Editar Aluno '{{ $alunos->nome }}'</h3>
            <hr class="divisor">
            <div class="row g-3 mt-2">
                <div class="col-lg-6 nome">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="{{ $alunos->nome }}">
                </div>
                <div class="col-lg-2">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" id="idade" name="idade" class="form-control"
                        value="{{ $alunos->idade }}">
                </div>

                <div class="col-lg-2">
                    <label for="ano" class="form-label">Ano</label>
                    <select class="form-select" id="ano" name="ano">
                        @if ($alunos->ano)
                            <option value="{{ $alunos->ano }}" selected>{{ $alunos->ano }}</option>
                        @else
                            <option value="">Selecione o ano...</option>
                            <option value="1°Ano">1º Ano</option>
                            <option value="2º Ano">2º Ano</option>
                            <option value="3º Ano">3º Ano</option>
                            <option value="4º Ano">4º Ano</option>
                            <option value="5º Ano">5º Ano</option>
                            <option value="6º Ano">6º Ano</option>
                            <option value="7º Ano">7º Ano</option>
                            <option value="8º Ano">8º Ano</option>
                            <option value="9º Ano">9º Ano</option>
                            <option value="1º Colegial">1º Colegial</option>
                            <option value="2º Colegial">2º Colegial</option>
                            <option value="3º Colegial">3º Colegial</option>
                        @endif
                    </select>
                </div>
                <div class="col-lg-2">
                    <label for="tipocadastro" class="form-label">Tipo</label>
                    <select class="form-select" id="tipocadastro" name="tipocadastro">
                        @if ($alunos->tipocadastro)
                            <option value="{{ $alunos->tipocadastro }}" selected>{{ $alunos->tipocadastro }}</option>
                        @else
                            <option value="-1">Selecione qual forma de cadastro..</option>
                            <option value="Matrícula">Matrícula</option>
                            <option value="Transferência">Transferência</option>
                            <option value="Rematrícula">Rematrícula</option>
                        @endif
                    </select>
                </div>
                {{-- <div class="col-lg-2 mt-5 id-aluno d-none">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ID Aluno" aria-label="ID Aluno"
                            id="idaluno" name="idaluno" value="{{ $alunos->idaluno }}">
                        <button class="btn btn-outline-dark" type="search" id="button-addon2">
                            <i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div> --}}
            </div>
            <div class="row g-3 mt-2 controle">
                <div class="col-lg-10 responsavel">
                    <label for="responsavel" class="form-label">Responsável</label>
                    <input type="text" id="responsavel" name="responsavel" class="form-control"
                        value="{{ $alunos->responsavel }}">
                </div>
                <div class="col-lg-2">
                    <label for="turma" class="form-label">Turma</label>
                    <input type="text" id="turma" name="turma" class="form-control"
                        value="{{ $alunos->turma }}">
                </div>
                <div class="col-lg-2 reprovas-1 d-none">
                    <label for="reprovas" class="form-label">Qtde Reprovas</label>
                    <select class="form-select" id="reprovas" name="reprovas">
                        @if ($alunos->qtdereprovas)
                            <option value="{{ $alunos->qtdereprovas }}" selected>{{ $alunos->qtdereprovas }}</option>
                        @else
                            <option value="-1">Selecione a quantidade de reprovas...</option>
                            <option value="0 reprova">0 reprova</option>
                            <option value="1 reprova">1 reprova</option>
                            <option value="2 reprovas">2 reprovas</option>
                            <option value="3 reprovas">3 reprovas</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="row g-3 mt-2 escola-ant d-none">
                <div class="col-lg-10">
                    <label for="escolaanterior" class="form-label">Escola anterior</label>
                    <input type="text" id="escolaanterior" name="escolaanterior" class="form-control"
                        value="{{ $alunos->escolaanterior }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Adicionar Aluno</button>
            <a href="/alunos" class="btn btn-primary mt-2">Voltar</a>
        </div>
    </form>
    <script>
        $(document).ready(function() {

            $('#tipocadastro').click(function() {

                var selecionado = $('#tipocadastro').val();

                if (selecionado == 'Transferência' || selecionado == 'Rematrícula') {

                    $('.reprovas-1').removeClass('d-none');
                    $('.responsavel').removeClass('col-lg-10');
                    $('.responsavel').addClass('col-lg-8');

                } else {

                    $('.reprovas-1').addClass('d-none');
                    $('.responsavel').removeClass('col-lg-8');
                    $('.responsavel').addClass('col-lg-10');

                }

                if (selecionado == 'Transferência') {
                    $('.escola-ant').removeClass('d-none');

                } else {
                    $('.escola-ant').addClass('d-none');
                }

                if (selecionado == 'Rematrícula') {

                    $('.nome').removeClass('col-lg-6');
                    $('.nome').addClass('col-lg-4');

                } else {

                    $('.nome').removeClass('col-lg-4');
                    $('.nome').addClass('col-lg-6');

                }
            });

        });
    </script>
</x-layout>
