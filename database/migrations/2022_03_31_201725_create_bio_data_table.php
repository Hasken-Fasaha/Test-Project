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
            $table->string('school_name')->nullable(true);
            $table->string('exam_type')->nullable(true);
            $table->string('from')->nullable(true);
            $table->string('to')->nullable(true);
            $table->json('ssce')->nullable(true);
            $table->string('faculty_id')->nullable(true);
            $table->string('dept_id')->nullable(true);
            $table->string('program_id')->nullable(true);
            $table->string('mode_of_study')->nullable(true);
            $table->string('course_duration')->nullable(true);
            $table->string('sign')->nullable(true);
            $table->string('passport')->nullable(true);
            $table->string('approval')->nullable(true);
            $table->string('reg_no')->nullable(true);
            $table->string('status')->nullable(true);
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
