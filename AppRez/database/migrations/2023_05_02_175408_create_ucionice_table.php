<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ucionice', function (Blueprint $table) {
            $table->id();
            $table->integer("broj");
            $table->boolean("zauzeto")->default(0);
            $table->date('datum_rezervacije')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ucionice');
    }
};