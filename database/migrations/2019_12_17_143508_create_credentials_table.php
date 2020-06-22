<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('school_state');
            $table->string('expected_date_of_graduation')->nullable();
            $table->string('type_of_result')->nullable();
            $table->string('exam_year')->nullable();
            $table->string('subject_one')->nullable();
            $table->string('grade_one')->nullable();
            $table->string('subject_two')->nullable();
            $table->string('grade_two')->nullable();
            $table->string('subject_three')->nullable();
            $table->string('grade_three')->nullable();
            $table->string('subject_four')->nullable();
            $table->string('grade_four')->nullable();
            $table->string('subject_five')->nullable();
            $table->string('grade_five')->nullable();
            $table->string('subject_six')->nullable();
            $table->string('grade_six')->nullable();
            $table->string('courses')->nullable();
            $table->string('state_exam')->nullable();
            $table->string('subject_combination')->nullable();
            $table->string('program_of_study')->nullable();
            $table->string('present_level')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('enrolment_status')->nullable();
            $table->string('present_cgpa')->nullable();
            $table->string('passport')->nullable();
            $table->string('unique_code')->nullable();
            $table->string('payment_status')->nullable();
            $table->boolean('completed')->default(0);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');
            $table->timestamps();


            $table->engine = 'MyISAM';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credentials');
    }
}
