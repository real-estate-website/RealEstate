<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnonceCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anonceCategorie', function (Blueprint $table) {
            $table->integer('ID_annonce');
            $table->integer('ID_categorie');
            
            $table->primary(['ID_annonce', 'ID_categorie']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anonceCategorie');
    }
}
