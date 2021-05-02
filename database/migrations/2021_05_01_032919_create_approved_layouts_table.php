<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovedLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('village');
            $table->string('surveyno');
            $table->string('extent');
            $table->string('flpno');
            $table->string('proceedings')->nullable();
            $table->string('drawings')->nullable();
            $table->string('mortgageplotnos')->nullable();
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
        Schema::dropIfExists('approved_layouts');
    }
}
