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
        //

        Schema::create('historico_salario', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor',8,2)->unsigned();
            $table->foreignId('colaborador_id')->unsigned()->constrained('colaborador');
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
        Schema::dropIfExists('historico_salario');
    }
};
