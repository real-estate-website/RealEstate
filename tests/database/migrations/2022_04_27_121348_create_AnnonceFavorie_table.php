<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceFavorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AnnonceFavorie', function (Blueprint $table) {
            $table->integer('ID_favorie');
            $table->integer('ID_annonce');
            
            $table->primary(['ID_favorie', 'ID_annonce']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AnnonceFavorie');
    }
}
