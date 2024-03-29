<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'telefones', function ( Blueprint $table ) {
            $table->increments('id');
            $table->integer("deputadoId")->unsigned();
            $table->foreign( 'deputadoId' )->references( 'id' )->on( 'deputados' );
            $table->string( 'ddd' );
            $table->string( 'numero' );
            $table->string( 'fax' );
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
        Schema::dropIfExists('telefones');
    }
}
