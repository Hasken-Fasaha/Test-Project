<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('surname');
            $table->string('other_names');
            $table->string('jamb_no');
            $table->string('email');
            $table->integer('jamb_score');
            $table->integer('post_utme_score')->nullable();
            $table->string('program_id');
            $table->string('admission_category')->nullable();
            $table->string('registration_no')->nullable();
            $table->integer('amount_paid')->nullable();
            $table->string('gender')->nullable();
            $table->string('nin')->nullable();
            $table->string('mobile')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->date('dob');
            $table->string('accepted')->default('No');
            $table->string('status')->default('Approved');
            $table->string('session')->nullable();
            $table->string('year')->nullable();
            $table->date('date_of_admission'); //->default(\Carbon::now());
            $table->date('registration_deadline');
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
        Schema::dropIfExists('admissions');
    }
}