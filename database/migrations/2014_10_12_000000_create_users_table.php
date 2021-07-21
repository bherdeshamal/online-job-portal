<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('applicant_father_name')->default('null');
            $table->string('address')->default('null');
            $table->string('city')->default('null');
            $table->string('state')->default('null');
            $table->string('country')->default('null');
            $table->string('mobile')->default('null');
            $table->string('pincode')->default('null');
            $table->string('year_of_completion')->default('null');
            $table->string('hsc')->default('null');
            $table->string('ssc')->default('null');
            $table->string('degree')->default('null');
            $table->string('degree_percent')->default('null');
            $table->string('dob')->default('null');
            $table->string('technology')->default('null');
            $table->string('university')->default('null');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpassword')->default('null');
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
        Schema::dropIfExists('users');
    }
}
