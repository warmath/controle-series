@extends('layout')

@section('cabecalho')
        <h1>Séries</h1>
@endsection

@section('conteudo')
    <div class="container mb-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Novo
        </button>
    </div>

    <div class="container">
        <ul class="list-group">
            <?php foreach ($series as $serie) : ?>
                <li class="list-group-item"><?= $serie ?></li>
            <?php endforeach; ?>
        </ul>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Série</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </div>
        </div>
    </div>
@endsection