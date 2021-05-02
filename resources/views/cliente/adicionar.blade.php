@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{route('cliente.index')}}">Clientes</a></li>
                    <li class="active">/Adicionar</li>
                </ol>


                <div class="panel-body"></div>
                <form action="{{ route('cliente.salvar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" placeholder="Nome do Cliente">
                        @if($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{$errors->first('nome')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nome">Email</label>
                        <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email do Cliente">
                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nome">Endereço</label>
                        <input type="text" name="endereco" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" placeholder="Endereço do Cliente">
                        @if($errors->has('endereco'))
                            <span class="help-block">
                                <strong>{{$errors->first('endereco')}}</strong>
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