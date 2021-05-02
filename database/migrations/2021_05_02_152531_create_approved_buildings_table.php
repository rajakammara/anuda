<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovedBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_buildings', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('mandal');
            $table->string('surveyno');
            $table->string('extent');
            $table->string('permitno');
            $table->string('proceedings');
            $table->string('drawings');

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
        Schema::dropIfExists('approved_buildings');
    }
}
