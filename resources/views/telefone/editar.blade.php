@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{route('cliente.detalhe', $telefone->cliente->id)}}">Detalhe</a></li>
                    <li><a href="{{route('cliente.index')}}">Clientes</a></li>
                    <li class="active">/Editar</li>
                </ol>


                <div class="panel-body"></div>
                <form action="{{ route('telefone.atualizar', $telefone->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Título do telefone" value="{{$telefone->titulo}}">
                    </div>

                    <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Número do telefone" value="{{$telefone->telefone}}">
                    </div>

                    <br/>
                    <button class="btn btn-info">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection