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
            $table->increments('id');
            $table->string('first_name', 32)->nullable();
            $table->string('last_name', 32)->nullable();
            $table->string('username', 64)->nullable();
            $table->string('verifyToken')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image');

            $table->string('middle_initial')->nullable();
            $table->string('medicaid_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->enum('type',array('admin','employee','consumer'))->nullable();
            $table->string('status')->default('inactive');

            $table->string('employee_id')->nullable();
            $table->string('employee_mi')->nullable();
            $table->string('employee_ssn')->nullable();


            $table->integer('created_by',false, 11)->nullable();
            $table->integer('updated_by',false, 11)->nullable();
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
