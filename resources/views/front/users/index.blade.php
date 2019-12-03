@extends('front.master.master')

@section('content')

    <div class="content p-1">
        <div class="list-group-item">
            <div class="d-flex">
                <div class="mr-auto p-2">
                    <h2 class="display-4 titulo">Listar Usuários</h2>
                </div>
                <a href="{{ route('admin.users.create') }}">
                    <div class="p-2">
                        <button class="btn btn-outline-success btn-sm">Cadastrar</button>
                    </div>
                </a>
            </div>
            <div class="alert alert-success" role="alert">
                Usuário apagado com sucesso!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th class="d-none d-sm-table-cell">E-mail</th>
                            <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Guilherme</td>
                            <td class="d-none d-sm-table-cell">gui@email.com</td>
                            <td class="d-none d-lg-table-cell">02/12/2019 17:13:39</td>
                            <td class="text-center">
                                <span class="d-none d-md-block">
                                    <a href="{{ route('admin.users.show', [1]) }}" class="btn btn-outline-primary btn-sm">Visualizar</a>
                                    <a href="{{ route('admin.users.edit', [1]) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                                    <a href="{{ route('admin.users.destroy', [1]) }}" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                                </span>
                                <div class="dropdown d-block d-md-none">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ações
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                        <a class="dropdown-item" href="{{ route('admin.users.show', [1]) }}">Visualizar</a>
                                        <a class="dropdown-item" href="{{ route('admin.users.edit', [1]) }}">Editar</a>
                                        <a class="dropdown-item" href="{{ route('admin.users.destroy', [1]) }}" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <nav aria-label="paginacao">
                  <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item disabled">
                      <span class="page-link">Primeira</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <span class="page-link">
                        2
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Última</a>
                    </li>
                  </ul>
                </nav>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">EXCLUIR ITEM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir o item selecionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Apagar</button>
            </div>
        </div>
    </div>
</div>

@endsection