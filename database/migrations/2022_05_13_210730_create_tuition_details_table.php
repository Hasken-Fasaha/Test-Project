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
            $table->string('program');
            $table->string('session');
            $table->string('registration_category');
            $table->string('indigene_category');
            $table->string('status')->default('Active');
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