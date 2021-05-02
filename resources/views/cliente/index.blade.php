@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Clientes</div>

                <div class="card-body">
                    <p>
                        <a href="{{ route('cliente.adicionar') }}" class="btn btn-info">Adicionar</a>
                    </p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>

                        <tbody>
                                @foreach($clientes as $cliente)
                                <tr>
                                    <th scope="row">{{ $cliente->id }}</th>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>
                                        <a href="{{route('cliente.detalhe', $cliente->id)}}" class="btn btn-info">Detalhe</a>
                                        <a href="{{route('cliente.editar', $cliente->id)}}" class="btn btn-success">Editar</a>
                                        <a href="javascript:(confirm('Você tem certeza que deseja deletar?') ? window.location.href='{{route('cliente.deletar', $cliente->id)}}' : false)" class="btn btn-danger">Excluir</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $clientes->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection