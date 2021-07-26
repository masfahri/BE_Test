<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationReligionToCandidate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate', function (Blueprint $table) {
            // $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('religion_id')->references('id')->on('religion')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate', function (Blueprint $table) {
            $table->dropForeign('candidate_religion_id_foreign');
        });
    }
}
