@extends('admin.master.master')

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

            @include('flash::message')

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
                    @if(!empty($users))
                        @foreach ($users as $user)    
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
                                <td class="d-none d-lg-table-cell">{{ $user->created_at }}</td>
                                <td class="text-center">
                                    <span class="d-none d-md-block">
                                        <a href="{{ route('admin.users.show', ['user' => $user->id]) }}" class="btn btn-outline-primary btn-sm">Visualizar</a>
                                        <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                                        <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                                    </span>
                                    <div class="dropdown d-block d-md-none">
                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ações
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                            <a class="dropdown-item" href="{{ route('admin.users.show', ['user' => $user->id]) }}">Visualizar</a>
                                            <a class="dropdown-item" href="{{ route('admin.users.edit', ['user' => $user->id]) }}">Editar</a>
                                            <a class="dropdown-item" href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

                <nav aria-label="paginacao">
                  <ul class="pagination pagination-sm justify-content-center">
                        {{ $users->links() }}
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
                <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Apagar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection