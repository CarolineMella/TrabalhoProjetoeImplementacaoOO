<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::paginate(2);
        return view('cliente.index', compact('clientes'));
    }

    public function adicionar() {
        return view('cliente.adicionar');
    }

    public function detalhe($id) {
        $cliente = Cliente::find($id);
        return view('cliente.detalhe', compact('cliente'));
    }

    public function salvar(\App\Http\Requests\ClienteRequest $request) {
        Cliente::create($request->all());
        return redirect()->route('cliente.adicionar');
    }

    public function editar($id) {
        $cliente = Cliente::find($id);
        if(!$cliente) {
            return "Cliente não existe!";
        }
        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(Request $request, $id) {
        $cliente = Cliente::find($id)->update($request->all());
        if(!$cliente) {
            return "Cliente não existe!";
        }
        return redirect()->route('cliente.index');
    }

    public function deletar($id) {
        $cliente = Cliente::find($id);

        if(!$cliente->deletarTelefones()) {
            return "Deu erro! Se vira!";
        }

        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
