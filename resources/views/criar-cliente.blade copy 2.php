@extends('layouts.main')

@section('title', 'Cadastro de Cliente')
@section('content')
<div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <!-- Form Name -->
            <h1 style="font-weight: 900">Cadastro</h1>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">Nome</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input  name="Nome completo" placeholder="Nome completo" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Documento</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input  name="documento" placeholder="CPF ou CNPJ" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Sexo</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <div class="input-group">
                        <select name="" id="">
                            <option value="m">masculino</option>
                            <option value="f">feminino</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Endereço<option value=""></option></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input  name="documento" placeholder="CPF ou CNPJ" class="form-control"  type="text">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Bairro<option value=""></option></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input  name="documento" placeholder="Bairro" class="form-control"  type="text">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Município<option value=""></option></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input  name="documento" placeholder="município" class="form-control"  type="text">
                </div>
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-warning" >ENVIAR <span class="glyphicon glyphicon-send"></span></button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
