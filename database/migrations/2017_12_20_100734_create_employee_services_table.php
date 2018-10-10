<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_users_id')->nullable();
            $table->unsignedInteger('services_id')->nullable();
            $table->timestamps();
        });

        Schema::table('employee_services', function($table) {
            //if 'users'  table  exists
            if(Schema::hasTable('users'))
            {
                $table->foreign('employee_users_id')->references('id')->on('users')->onDelete('cascade');;
            }

            //if 'services'  table  exists
            if(Schema::hasTable('services'))
            {
                $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');;
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
        Schema::dropIfExists('employee_services');
    }
}
