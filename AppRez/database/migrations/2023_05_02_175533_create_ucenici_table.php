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
        Schema::create('ucenici', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('sifra');
            $table->integer('broj_telefona');
            $table->boolean('prisutnost')->default(0);
            $table->string('ime');
            $table->string('prezime');
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
        Schema::dropIfExists('ucenici');
    }
};
