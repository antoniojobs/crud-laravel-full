<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = DB::select("Select * from clientes");
        return view('home', compact('clientes'));

    }

    public function novo()
    {
        return view('novo-candidato');
    }

    public function cadastrar(Request $req)
    {
        DB::table('clientes')->insert(
            [
              'nome'        => $req['nome'],
              'cargo'       => $req['cargo'],
              'pretensao'   => $req['pretensao'],
            ]);

        return redirect('/home')->with('success','Gravado com sucesso.');
    }

    public function editar($id)
    {
        $candidatos = DB::select("Select * from candidatos where id=$id");
        $vai = $candidatos[0];
        return view('editar-candidato', compact('vai'));
    }

    public function atualizar(Request $req)
    {
         $dados = DB::table('candidatos')
          ->where('id', $req->id)
          ->update(
            [
                'nome'        => $req['nome'],
                'cargo'       => $req['cargo'],
                'pretensao'   => $req['pretensao']
            ]);
        return redirect('/home')->with('success','Atualizado com sucesso.');
    }

    public function excluir($id)
    {
        $dados =  DB::table('candidatos')->where('id', $id)->delete();
        return redirect('/home')->with('danger','Excluído com sucesso.');
    }

}
