@extends('layouts.main')

@section('title','Listagem de Clientes')
@section('content')
<h1>Aqui você lista todos os clientes</h1>

    <div class="p-0 col-lg-12">
        <table class="table table-dark table-striped">
        <thead style="color: royalblue">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Documento</th>
                <th scope="col">Sexo</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Município</th>
                <th scope="col">Estado</th>
                <th scope="col">Cep</th>
                <th scope="col">Telefone</th>
                <th scope="col">ALTERAR</th>
            </tr>
        </thead>
    <tbody>

            @foreach ($clientes as $cliente )
            <tr>
                <td> {{$cliente->nome}} </td>
                <td> {{$cliente->documento}} </td>
                <td> {{$cliente->sexo}} </td>
                <td> {{$cliente->endereco}} </td>
                <td> {{$cliente->bairro}} </td>
                <td> {{$cliente->municipio}} </td>
                <td> {{$cliente->estado}} </td>
                <td> {{$cliente->cep}} </td>
                <td> {{$cliente->telefone}} </td>
                <td> <a id="{{$cliente->id}}" href="/deletar/{{$cliente->id}}"><i class="fas fa-trash-alt"></i>Excluir</a> |
                     <a href="/cliente/edita/{{$cliente->id}}"><i class="fas fa-edit"></i>Editar</a> </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
@endsection

