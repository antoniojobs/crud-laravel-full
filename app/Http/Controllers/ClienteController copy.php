<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('/home',['clientes'=>$clientes]);
    }
    public function store(Request $request)
    {
        dd($request);
        // $cliente = new Cliente;
        // $clientes->nome = $request->nome;

        // return view('criar-cliente');
    }
    public function create()
    {
        return view('criar-cliente');
    }
    public function update()
    {
        return view('atualizar-cliente');
    }
    public function delete()
    {
        return view('excluir-cliente');
    }

}
