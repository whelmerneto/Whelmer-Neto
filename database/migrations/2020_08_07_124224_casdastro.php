<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Casdastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('cadastro', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('email', 40);
            $table->string('sexo');
            $table->integer('idade');
            $table->string('celular');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
