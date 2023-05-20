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
        Schema::table('evidencije', function (Blueprint $table) {
            $table->foreignId('nastavnik_id')->constrained('nastavnici');
            $table->foreignId('ustanova_id')->constrained('ustanove');
            $table->foreignId('ucionice_broj')->constrained('ucionice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evidencije', function (Blueprint $table) {
            //
        });
    }
};
