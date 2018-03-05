<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->string('name');
            $table->float('score')->nullable();
            $table->float('cost')->nullable();
            $table->float('weather')->nullable();
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->float('housing')->nullable();
            $table->float('cost_of_living')->nullable();
            $table->float('travel_connectivity')->nullable();
            $table->float('commute')->nullable();
            $table->float('safety')->nullable();
            $table->float('business_freedom')->nullable();
            $table->float('healthcare')->nullable();
            $table->float('education')->nullable();
            $table->float('economy')->nullable();
            $table->float('environment_quality')->nullable();
            $table->float('taxation')->nullable();
            $table->float('internet_access')->nullable();
            $table->string('image_web')->nullable();
            $table->string('image_mobile')->nullable();
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
        Schema::dropIfExists('cities');
    }
}
