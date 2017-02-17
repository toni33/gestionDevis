<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();           
            $table->foreign('client_id')
            ->references('id')
            ->on('clients')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->date('date_devis');
            $table->date('date_commande');
            $table->date('date_facture');

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
       Schema::drop('devis');
    }
}
