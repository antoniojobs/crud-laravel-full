<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');//posteriormete pode ser usado UUID
            $table->string("nome");
            $table->string("documento");
            $table->string("tipodoc");//f para CPF,j para CNPJ 
            $table->string("sexo");
            $table->string("bairro");
            $table->string("municipio");
            $table->string("estado");
            $table->string("cep");
            $table->string("telefone");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
