@extends('front.master.master')

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

        @if ($errors->all())
            @foreach($errors->all() as $error)
                @message(['color' => 'orange'])
                    <p class="icon-asterisk">{{ $error }}</p>
                @endmessage
            @endforeach
        @endif

        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Nome</label>
                    <input name="name" type="text" class="form-control" id="nome" placeholder="Nome completo" value="{{ old('name') }}"/>
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Nome do usuário" value="{{ old('username') }}">
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> E-mail</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" value="{{ old('email') }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Senha</label>
                    <input name="password" type="password" class="form-control" id="senha" placeholder="Senha com mínimo 6 caracteres">
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
