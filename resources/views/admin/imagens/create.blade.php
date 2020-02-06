@extends('admin.master.master')

@section('content')
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Cadastrar Imagem</h2>
            </div>
            <a href="{{ route('admin.imagens.index') }}">
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

        @include('flash::message')

        <form action="{{ route('admin.imagens.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="cats_imagem_id" value="1">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Imagem</label>
                       <input name="imagem" type="file" id="imagem"/> 
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
