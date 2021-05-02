@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clientes</div>
                <li class="active">Detalhe</li>

                <div class="card-body">
                    <p><b>Cliente: <br/> </b> {{$cliente->nome}}</p>
                    <p><b>Email: <br/> </b> {{$cliente->email}}</p>
                    <p><b>Endereço: <br/> </b> {{$cliente->endereco}}</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                            <tr>
                                <th scope="row">{{ $telefone->id }}</th>
                                <td>{{ $telefone->titulo }}</td>
                                <td>{{ $telefone->telefone }}</td>
                                <td>
                                    <a href="{{route('telefone.editar', $telefone->id)}}" class="btn btn-success">Editar</a>
                                    <a href="javascript:(confirm('Você tem certeza que deseja deletar?') ? window.location.href='{{route('telefone.deletar', $telefone->id)}}' : false)" class="btn btn-danger">Excluir</a>
                                </td>

                            </tr>
                           @endforeach
                        </tbody>
                    </table>

                    <p>
                        <a href="{{route('telefone.adicionar', $cliente->id)}}" class="btn btn-info">Adicionar Telefone</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection