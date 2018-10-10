<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientServiceHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_service_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_users_id')->nullable();
            $table->unsignedInteger('employee_users_id')->nullable();
            $table->string('date')->nullable();
            $table->string('starting_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('comments')->nullable();
            $table->string('duration')->nullable();

            $table->enum('status',array('active','inactive'))->nullable();
            $table->integer('created_by',false, 11)->nullable();
            $table->integer('updated_by',false, 11)->nullable();
            $table->timestamps();
        });

        Schema::table('client_service_history', function($table) {
            //if 'users'  table  exists
            if(Schema::hasTable('users'))
            {
                $table->foreign('client_users_id')->references('id')->on('users')->onDelete('cascade');;
            }

            //if 'users'  table  exists
             if(Schema::hasTable('users'))
            {
                $table->foreign('employee_users_id')->references('id')->on('users')->onDelete('cascade');;
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
        Schema::dropIfExists('client_service_history');
    }
}
