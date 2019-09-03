<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use LaravelLegends\PtBrValidator\Validator;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();

        return view ('clientes.lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
        return view ('clientes.formulario');
    }

    public function cadastrar(Request $request)
    {

        $cliente = new Cliente();

        $cliente = $cliente->create($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');

        return redirect('clientes/novo');
    }

    public function editar($id)
    {
        $cliente = Cliente::findOrfail($id);

        return view('clientes.formulario', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request)
    {
        $cliente = Cliente::findOrfail($id);

        $cliente->update($request->all());

        return redirect('clientes/');
    }

    public function deletar($id)
    {
        $cliente = Cliente::findOrfail($id);

        $cliente->delete();

        return redirect('clientes/');
    }
}
