<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'situacoes', function ( Blueprint $table ) {
            $table->increments('id');
            $table->integer("legislaturaId");
            $table->string( 'dataInicio' )->nullable();
            $table->string( 'status' );
            $table->string( 'motivo' )->nullable();
            $table->string( 'complemento' )->nullable();
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
        Schema::dropIfExists('situacoes');
    }
}
