<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnauthorizedLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unauthorized_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('mandal');
            $table->string('village');
            $table->string('owner');
            $table->string('surveyno');
            $table->string('extent');
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
        Schema::dropIfExists('unauthorized_layouts');
    }
}
