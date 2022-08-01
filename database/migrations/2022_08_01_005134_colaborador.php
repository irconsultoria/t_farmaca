<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador', function (Blueprint $table) {
            $table->id()->unsigned();;
            $table->string('nome','500');
            $table->string('cpf','11')->unique();
            $table->string('email','150')->unique();
            $table->string('rg','14');
            $table->string('cep','8');
            $table->string('endereco','150');
            $table->smallInteger('numero')->unsigned()->nullable();
            $table->string('cidade','100');
            $table->string('estado','50');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colaborador');
    }
};
