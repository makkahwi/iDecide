<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('design');
            $table->integer('web');
            $table->integer('coding');
            $table->integer('networks');
            $table->integer('hacking');
            $table->integer('drawing');
            $table->integer('sketching');
            $table->integer('planing');
            $table->integer('internal');
            $table->integer('robots');
            $table->integer('chemcials');
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
        Schema::dropIfExists('experiences');
    }
}
