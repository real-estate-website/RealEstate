<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->integer('ID_message');
            $table->integer('ID_annonce');
            $table->char('object', 255);
            $table->char('contenu', 255);
            $table->integer('expediteur_id');
            $table->integer('destinataire_id');
            
            $table->primary(['ID_message', 'ID_annonce']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
