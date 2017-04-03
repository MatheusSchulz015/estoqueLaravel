<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->string('cpf',11)->nullable();//pode ser null0
            $table->date('birthdate')->nullable();
            $table->timestamps();//cria campo "ceate_at" "update_at"
            $table->softDeletes();//marca o registro como apagado, ao inves de excluir
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
