<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termins', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->string('pocetak');
            $table->string('kraj');
            $table->string('ogranizator')->default('0');
            $table->string('dvorana_id');
            $table->string('deleted');
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
        Schema::dropIfExists('termins');
    }
}
