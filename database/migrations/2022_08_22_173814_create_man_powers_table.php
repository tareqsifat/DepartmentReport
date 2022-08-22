<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManPowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('man_powers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('class')->nullable();
            $table->string('thana')->nullable();
            $table->string('stage')->nullable();
            $table->string('responsibility')->nullable();
            $table->string('number')->nullable();
            $table->string('skill')->nullable();
            $table->string('level')->nullable();
            $table->string('creator')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('man_powers');
    }
}
