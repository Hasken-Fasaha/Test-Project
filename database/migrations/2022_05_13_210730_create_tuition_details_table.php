<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuitionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuition_details', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('program_id')->references('id')->on('programs');
            $table->string('program_id');
            $table->string('session');
            $table->string('fr_or_re_or_fo');
            $table->string('in_or_ni_or_nr');
            $table->string('status');
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
        Schema::dropIfExists('tuition_details');
    }
}