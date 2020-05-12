<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_patient');
            $table->integer('id_medecin');
            $table->string('longitude');
            $table->string('latitude');
            $table->date('date');
            $table->integer('nbr_battement');
            $table->integer('degre_douleur');
            $table->string('tension');
            $table->integer('temperature');
            $table->string('remarque');
            $table->string('file_ordonance');
            $table->date('date_traitement');
            $table->boolean('vu_medecin');
            $table->boolean('vu_patient');
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
        Schema::dropIfExists('alertes');
    }
}
