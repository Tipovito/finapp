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
        Schema::create('fin_movimentos', function(Blueprint $table){
            $table->id();
            $table->text('descricao');
            $table->float('valor', 12,2);
            $table->string('tipo');
            $table->ipAddress('ip_user')->nullable();
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
        schema::dropIfExists('fin_movimentos');
    }
};
