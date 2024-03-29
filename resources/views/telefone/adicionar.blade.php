@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{route('cliente.detalhe', $cliente->id)}}">Detalhe</a></li>
                    <li><a href="{{route('cliente.index')}}">Clientes</a></li>
                    <li class="active">/Adicionar</li>
                </ol>


                <div class="panel-body"></div>
                <form action="{{ route('telefone.salvar', $cliente->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" name="titulo" class="form-control {{$errors->has('titulo') ? 'is-invalid' : ''}}" placeholder="Título do telefone">
                        @if($errors->has('titulo'))
                            <span class="help-block">
                                <strong>{{$errors->first('titulo')}}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="text" name="telefone" class="form-control {{$errors->has('telefone') ? 'is-invalid' : ''}}" placeholder="Número do telefone">
                        @if($errors->has('telefone'))
                            <span class="help-block">
                                <strong>{{$errors->first('telefone')}}</strong>
                            </span>
                        @endif
                    </div>

                    <br/>
                    <button class="btn btn-info">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection