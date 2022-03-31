<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_data', function (Blueprint $table) {
            $table->string('jamb_no')->primary();
            $table->string('surname');
            $table->string('middlename');
            $table->string('firstname');
            $table->string('gender');
            $table->date('dob');
            $table->string('nationality');
            $table->string('state_id');
            $table->string('lga_id');
            $table->string('mstatus');
            $table->string('address');
            $table->string('phone_no');
            $table->string('email');
            $table->string('nok_name');
            $table->string('nok_phone_no');
            $table->string('nok_email');
            $table->string('sponsor_name');
            $table->string('sponsor_address');
            $table->string('sponsor_phone_no');
            $table->string('sponsor_email');
            $table->string('relationship');
            $table->string('school_name');
            $table->string('exam_type');
            $table->string('from');
            $table->string('to');
            $table->json('ssce');
            $table->string('faculty_id');
            $table->string('dept_id');
            $table->string('program_id');
            $table->string('mode_of_study');
            $table->string('course_duration');
            $table->string('sign');
            $table->string('passport');
            $table->string('approval');
            $table->string('reg_no');
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
        Schema::dropIfExists('bio_data');
    }
}
