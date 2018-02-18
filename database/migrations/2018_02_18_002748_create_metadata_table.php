<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->float('score')->nullable();
            $table->float('cost')->nullable();
            $table->float('girls')->nullable();
            $table->float('clubs')->nullable();
            $table->float('bars')->nullable();
            $table->float('logistics')->nullable();
            $table->float('weather')->nullable();
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
        Schema::dropIfExists('metadata');
    }
}
