@extends('layouts.main')
@section('scriptmascara')
{{-- <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript">

    $(document).ready(()=>{
        $("#cpf").mask("000.000.00-00")
        $("#telefone").mask("(00)00000-0000")
        $("#cep").mask("00.000-000")

        $('#doct').on('change',(e)=>{
            $('#documento').prop('id',e.target.value);
        })
        $('#doct').on('change',(e)=>{
            $('#CPF').prop('id',e.target.value);
        })

        $("#doct").change(function(){
            var e = $(this).find('option:selected').attr('value')//Exemplo
            if(e == 'CNPJ'){
                $("#CNPJ").unmask().mask("00.000.000/0000-00")
            }else{
                $("#CPF").unmask().mask("000.000.00-00")
            }
        });
    })
</script>
@endsection
@section('title', 'Cadastro de Cliente')
@section('content')
    <div class="container">

        <body class="bg-light">

            <div class="container">
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
                @endif
                <div class="row py-5">
                    <div class="col-md-4 order-md-2 mb-4">

                    </div>

                    <div class=" edicao col-md-8 order-md-1">
                        <h4 class="mb-3">Realize a edição do cadastro</h4>

                        <form action="/cliente/atualiza/{{$cliente->id}} " method="post" class="needs-validation" novalidate="">
                            {{ csrf_field() }}
                            {{-- @method('PUT') --}}
                            <div class="row">
                                <div class="col-md-12 mb-6">
                                    <label for="nome">Nome completo</label>
                                    <input name="nome" type="text" class="form-control" id="nome" placeholder="" value=" {{$cliente->nome}} "
                                        required="">
                                    <div class="invalid-feedback">
                                        Este campo deve ser preenchido.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-6">
                                    <label for="telefone">Telefone</label>
                                    <input name="telefone" type="text" class="form-control" id="telefone"
                                        placeholder="(021)xxxx-xxxx" value="{{$cliente->telefone}}" required="">
                                    <div class="invalid-feedback">
                                        Este campo deve ser preenchido.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-6">
                                    <label for="documento">Documento</label>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="documento_tipo">Tipo de documento</label>
                                            <select name="documento_tipo" class="custom-select" required="" id="doct">
                                                <option value="">Selecione...</option>
                                                <option value="CPF"{{$cliente->tipodoc=="CPF"?"selected='selected'" : ""}}>CPF</option>
                                                <option value="CNPJ">CNPJ</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Este campo deve ser preenchido.
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="documento">Digite o documento</label>
                                            <input name="documento" type="text" class="form-control" id="documento"
                                                placeholder="CPF ou CNPJ" value="{{$cliente->documento}}" required="">
                                            <div class="invalid-feedback">
                                                Este campo deve ser preenchido.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-0 col-md-12 mb-3">
                                        <label for="sexo">Sexo</label>
                                        <select name="sexo" class="custom-select" required="">
                                            <option value="">Selecione...</option>
                                            <option value="f"{{$cliente->sexo=="f" ?"selected='selected'" : ""}}>feminino</option>
                                            <option value="m"{{$cliente->sexo=="m" ?"selected='selected'" : ""}}>masculino</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Este campo deve ser preenchido.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="enderaco">Endereço</label>
                                <input name="endereco" type="text" class="form-control" id="endereco"
                                    placeholder="" required="" value="{{$cliente->endereco}}">
                                <div class="invalid-feedback">
                                    Este campo deve ser preenchido.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Bairro</label>
                                <input name="bairro" type="text" class="form-control" id="bairro"
                                    placeholder="Exemplo 'Posse'" required="" value="{{$cliente->bairro}}">
                                <div class="invalid-feedback">
                                    Este campo deve ser preenchido.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="municipio">Município</label>
                                <input name="municipio" type="text" class="form-control" id="bairro"
                                    placeholder="Exemplo 'Nova Iguaçu'" required="" value="{{$cliente->municipio}}">
                                <div class="invalid-feedback">
                                    Este campo deve ser preenchido.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="estados-brasil">Estado</label>
                                    <select name="estado" class="custom-select d-block w-100" id="state" required="">
                                        <option value="">Selecione...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Este campo deve ser preenchido.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cep">Cep</label>
                                    <input name="cep" type="text" class="form-control" id="cep" placeholder="" required="" value="{{$cliente->cep}} id="cep">
                                    <div class="invalid-feedback">
                                        Este campo deve ser preenchido.
                                    </div>
                                </div>
                            </div>

                            <hr class="mb-4">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Salvar">
                        </form>
                    </div>
                </div>

            </div>

            <!-- Bootstrap core JavaScript
                                ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script>
                window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

            </script>
            <script src="../../assets/js/vendor/popper.min.js"></script>
            <script src="../../dist/js/bootstrap.min.js"></script>
            <script src="../../assets/js/vendor/holder.min.js"></script> --}}
            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';

                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');

                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();

            </script>
        </body>
    </div>
@endsection
