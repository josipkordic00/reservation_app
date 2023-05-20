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
        Schema::create('nastavnici', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('sifra');
            $table->integer('broj_telefona');
            $table->string('ime');
            $table->string('prezime');
            $table->text('qr_code_path')->nullable();
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
        Schema::dropIfExists('nastavnici');
    }
};
