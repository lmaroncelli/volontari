<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolontari extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblVolontari', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('associazione_id')->unsigned();
            $table->string('nome')->default('');
            $table->string('cognome')->default('');
            $table->text('nota')->nullable()->default(null);
            $table->string('registro')->default('');
            $table->date('data_nascita')->nullable()->default(null);
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
        Schema::dropIfExists('tblVolontari');
    }
}
