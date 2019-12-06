@extends('admin.master.master')

@section('content')

<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Cadastrar Usuários</h2>
            </div>
            <a href="{{ route('admin.users.index') }}">
                <div class="p-2">
                    <button class="btn btn-outline-info btn-sm">
                        Listar
                    </button>
                </div>
            </a>
        </div><hr>

        @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        @endforeach

        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Nome</label>
                    <input name="name" type="text" class="form-control" id="nome" placeholder="Nome completo" value="{{ old('name') }}"/>
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> E-mail</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" value="{{ old('email') }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Senha</label>
                    <input name="password" type="password" class="form-control" id="senha" placeholder="Senha com mínimo 6 caracteres">
                </div>
                
                <div class="form-group col-md-6">
                    <label class="label">
                        <span class="legend">*Nível de acesso:</span>
                        <select class="form-control" name="nivel_acesso">
                            <option value="1" {{ old('nivel_acesso') == '1' ? 'selected' : '' }}> Administrador</option>
                            <option value="2" {{ old('nivel_acesso') == '2' ? 'selected' : '' }}> Usuário</option>
                        </select>
                    </label>
                </div>

            </div>
        
            <p>
                <span class="text-danger">* </span>Campo obrigatório
            </p>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</div>

@endsection
