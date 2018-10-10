<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_code', function (Blueprint $table) {
            $table->increments('id');

            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->string('title')->nullable();
            $table->integer('last_number')->nullable();
            $table->integer('increment')->nullable();

            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->integer('created_by',false, 11)->nullable();
            $table->integer('updated_by',false, 11)->nullable();
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
        Schema::dropIfExists('transaction_code');
    }
}
