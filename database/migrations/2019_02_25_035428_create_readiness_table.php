<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readiness', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_ref');
            $table->foreign('project_ref')->references('project_ref')->on('projects');
            $table->string('nap_or_readiness');
            $table->string('readiness_type');
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
        Schema::dropIfExists('readiness');
    }
}
