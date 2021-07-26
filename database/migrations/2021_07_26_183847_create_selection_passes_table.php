<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectionPassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection_passes', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id')->nullable(false);
            $table->string('unit')->nullable(false);
            $table->string('assesment')->nullable(false);
            $table->float('score')->nullable(false);
            $table->string('result')->nullable(false);
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
        Schema::dropIfExists('selection_passes');
    }
}
