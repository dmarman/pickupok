<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGirlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->float('sexiness')->nullable();
            $table->float('bmi')->nullable();
            $table->float('breast')->nullable();
            $table->float('butt')->nullable();
            $table->float('flakiness')->nullable();
            $table->float('shield')->nullable();
            $table->float('black_acceptance')->nullable();
            $table->float('white_acceptance')->nullable();
            $table->float('hispanic_acceptance')->nullable();
            $table->float('asian_acceptance')->nullable();
            $table->float('foreign_acceptance')->nullable();
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
        Schema::dropIfExists('girls');
    }
}
