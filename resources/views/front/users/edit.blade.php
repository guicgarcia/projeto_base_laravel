@extends('front.master.master')

@section('content')

<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Editar Usuário</h2>
            </div>
            <div class="p-2">
                <span class="d-none d-md-block">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-info btn-sm">Listar</a>
                    <a href="{{ route('admin.users.show', ['user' => $user->id]) }}" class="btn btn-outline-primary btn-sm">Visualizar</a>
                    <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                </span>
                <div class="dropdown d-block d-md-none">
                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">Listar</a>
                        <a class="dropdown-item" href="{{ route('admin.users.show' , ['user' => $user->id]) }}>Visualizar</a>
                        <a class="dropdown-item" href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach

        <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $user->id }}">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Nome</label>
                    <input name="name" type="text" class="form-control" id="nome" placeholder="Nome completo" value="{{ old('name') ?? $user->name }}">
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Nome do usuário" value="{{ old('username') ?? $user->username }}">
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> E-mail</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" value="{{ old('email') ?? $user->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Senha</label>
                    <input name="password" type="password" class="form-control" id="senha" placeholder="Senha com mínimo 3 caracteres">
                </div>
            </div>

            <p>
                <span class="text-danger">* </span>Campo obrigatório
            </p>
            <button type="submit" class="btn btn-warning">Salvar</button>
        </form>
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