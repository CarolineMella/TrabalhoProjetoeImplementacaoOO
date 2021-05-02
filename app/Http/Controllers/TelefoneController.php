<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefone;
use App\Models\Cliente;

class TelefoneController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function adicionar($id) {
        $cliente = Cliente::find($id);
        return view('telefone.adicionar', compact('cliente'));
    }

    public function salvar(\App\Http\Requests\TelefoneRequest $request, $id) {
        $telefone = new Telefone;
        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');

        Cliente::find($id)->addTelefones($telefone);

        return redirect()->route('cliente.detalhe', $id);
    }

    public function editar($id) {
        $telefone = Telefone::find($id);
        if(!$telefone) {
            return redirect()->route('cliente.detalhe', $telefone->cliente->id);
        }
        return view('telefone.editar', compact('telefone'));
    }

    public function atualizar(Request  $request, $id) {
        $telefone = Telefone::find($id);
        $telefone->update($request->all());

        return redirect()->route('cliente.detalhe', $telefone->cliente->id);
    }

    public function deletar($id) {
        $telefone = Telefone::find($id);

        $telefone->delete();

        return redirect()->route('cliente.detalhe', $telefone->cliente->id);
    }
}
