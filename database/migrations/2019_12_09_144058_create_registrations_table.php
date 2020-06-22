<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('date_birth');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('country_of_birth');
            $table->string('uwi_staff_member');
            $table->string('dependant_uwi_staff');
            $table->string('glomode_staff_member');
            $table->string('dependant_glomode_staff');
            $table->string('disabillity');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile_one');
            $table->string('mobile_two');
            $table->string('username');
            $table->string('password');
            $table->string('security_que');
            $table->rememberToken();
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
        Schema::dropIfExists('registrations');
    }
}
