<?php

namespace App\Http\Controllers;



use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {

        $clientes = Cliente::all();
        return view('/home',['clientes'=>$clientes]);
    }
    public function store(ClienteRequest $request)
    {
        if ($request) {
            $cliente = new Cliente;
            $cliente->nome = $request['nome'];
            $cliente->telefone = $request['telefone'];
            $cliente->tipodoc = $request['documento_tipo'];
            $cliente->documento = $request['documento'];
            $cliente->sexo = $request['sexo'];
            $cliente->endereco = $request['endereco'];
            $cliente->bairro = $request['bairro'];
            $cliente->municipio = $request['municipio'];
            $cliente->estado = $request['estado'];
            $cliente->cep = $request['cep'];
            // echo'<pre>';
            // print_r($cliente);
            // echo'</pre>';
            try {
                $cliente->save();
                return redirect('/')->with('msg','Clientre criado com Sucesso');
            } catch (Throwable $e) {
                report($e);

                return false;
            }
        }
    }
    public function create()
    {
        return view('criar-cliente');
    }
    public function update(ClienteRequest $request)
    {
            // dd($id);
            $request->except(['_token']);
            Cliente::findOrFail($request->id)->update($request->all());
            return redirect('/')->with('msg','atualizado com sucesso');
    }

    public function edita(ClienteRequest $request)
    {
            Cliente::findOrFail($id);
            return view('clientes/show');
    }



    public function destroy($id)
    {
        try {
            Cliente::findOrFail($id)->delete();
            return redirect('/')->with('msg','deletado com sucesso');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show',['cliente'=>$cliente]);
    }

}
