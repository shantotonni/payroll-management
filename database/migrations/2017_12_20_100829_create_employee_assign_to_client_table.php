<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeAssignToClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_assign_to_client', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_users_id')->nullable();
            $table->unsignedInteger('client_users_id')->nullable();
            $table->timestamps();
        });

        Schema::table('employee_assign_to_client', function($table) {
            //if 'users'  table  exists
            if(Schema::hasTable('users'))
            {
                $table->foreign('employee_users_id')->references('id')->on('users')->onDelete('cascade');;
            }

            //if 'users'  table  exists
            if(Schema::hasTable('users'))
            {
                $table->foreign('client_users_id')->references('id')->on('users')->onDelete('cascade');;
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_assign_to_client');
    }
}
