<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_users_id')->nullable();
            $table->unsignedInteger('services_id')->nullable();
            $table->timestamps();
        });

        Schema::table('client_services', function($table) {
            //if 'users'  table  exists
            if(Schema::hasTable('users'))
            {
                $table->foreign('client_users_id')->references('id')->on('users')->onDelete('cascade');;
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
        Schema::dropIfExists('client_services');
    }
}
