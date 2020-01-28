@extends('admin.master.master')

@section('content')

<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Categoria Imagem</h2>
            </div>
            <div class="p-2">
                <span class="d-none d-md-block">
                    <a href="{{ route('admin.cat-imagem.index') }}" class="btn btn-outline-info btn-sm">Listar</a>
                    <a href="{{ route('admin.cat-imagem.edit', ['cat_imagem' => $catImagem->id]) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                    <a href="{{ route('admin.cat-imagem.destroy', ['cat_imagem' => $catImagem->id]) }}" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                </span>
                <div class="dropdown d-block d-md-none">
                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                        <a class="dropdown-item" href="{{ route('admin.cat-imagem.index') }}">Listar</a>
                        <a class="dropdown-item" href="{{ route('admin.cat-imagem.edit', ['cat_imagem' => $catImagem->id]) }}">Editar</a>
                        <a class="dropdown-item" href="{{ route('admin.cat-imagem.destroy', ['cat_imagem' => $catImagem->id]) }}" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                    </div>
                </div>
            </div>
        </div><hr>
        <dl class="row">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">{{ $catImagem->id }}</dd>

            <dt class="col-sm-3">Nome</dt>
            <dd class="col-sm-9">{{ $catImagem->name }}
            </dd>

            <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
            <dd class="col-sm-9">{{ $catImagem->created_at }}</dd>

        </dl>
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