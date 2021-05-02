@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{route('cliente.index')}}">Clientes</a></li>
                    <li class="active">/Editar</li>
                </ol>


                <div class="panel-body"></div>
                <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do Cliente" value="{{$cliente->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="nome">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email do Cliente" value="{{$cliente->email}}">
                    </div>
                    <div class="form-group">
                        <label for="nome">Endereço</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente" value="{{$cliente->endereco}}">
                    </div>
                    <br/>
                    <button class="btn btn-info">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection