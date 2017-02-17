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

            $table->string('civilite')->nullable;
            $table->string('nom')->nullable;
            $table->string('prenom')->nullable;
            $table->string('adresse')->nullable;
            $table->string('code_postal')->nullable;
            $table->string('localite')->nullable;
            $table->string('ville')->nullable;
            $table->string('pays')->nullable;
            $table->string('email')->nullable;
            $table->string('telephone')->nullable;
            $table->string('mobile')->nullable;

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
       Schema::drop('clients');
    }
}
