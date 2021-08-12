<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvoranasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvoranas', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->string('naziv');
            $table->string('max_igraci');
            $table->string('tvrtka_id');
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
        Schema::dropIfExists('dvoranas');
    }
}
