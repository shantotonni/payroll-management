<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {

            //authorized information

            $table->increments('id');
            $table->string('managed_medicaid_health_plan')->nullable();
            $table->string('managed_MLTC_plan')->nullable();
            $table->string('acknowledgement')->nullable();
            $table->string('check_mark_to_all_that_apply')->nullable();

            $table->string('authorized_first_name', 32)->nullable();
            $table->string('authorized_last_name', 32)->nullable();
            $table->string('authorized_middle_initial')->nullable();
            $table->string('relationship_to_member')->nullable();
            $table->string('authorized_address')->nullable();
            $table->string('authorized_city')->nullable();
            $table->string('authorized_country')->nullable();
            $table->string('authorized_state')->nullable();
            $table->string('authorized_zip_code')->nullable();
            $table->string('authorized_telephone_number')->nullable();
            $table->string('authorized_cell_phone')->nullable();
            $table->string('authorized_email_address')->unique()->nullable();

            //authorized Physician information

            $table->string('physician_name', 32)->nullable();
            $table->string('patient_name', 32)->nullable();

            //provider information

            $table->string('provider_name', 32)->nullable();
            $table->string('provider_speciality', 32)->nullable();
            $table->string('provider_licence', 32)->nullable();
            $table->string('provider_name_of_client', 32)->nullable();

            $table->string('provider_address')->nullable();

            $table->string('provider_city')->nullable();
            $table->string('provider_county')->nullable();
            $table->string('provider_state')->nullable();
            $table->string('provider_zip_code')->nullable();
            $table->string('provider_phone')->nullable();
            $table->string('provider_fax')->nullable();
            $table->string('provider_signature')->unique()->nullable();


            $table->string('question_1')->nullable();
            $table->string('indicate_licenses')->nullable();
            $table->string('licence_number')->nullable();
            $table->string('licence_expiration_date')->nullable();
            $table->integer('lowest_wage_per_hour')->nullable();
            $table->integer('lowest_wage_24_hour')->nullable();
            $table->string('date_you_can_start')->nullable();

            $table->integer('question_2')->nullable();
            $table->integer('question_3')->nullable();
            $table->integer('question_4')->nullable();
            $table->integer('question_5')->nullable();
            $table->integer('question_6')->nullable();
            $table->integer('question_7')->nullable();
            $table->integer('question_8')->nullable();
            $table->integer('question_9')->nullable();

            $table->string('question_4_answer')->nullable();
            $table->string('question_5_answer')->nullable();
            $table->string('question_6_answer_date')->nullable();
            $table->string('question_6_answer_location')->nullable();
            $table->string('question_6_answer_supervisor_name')->nullable();
            $table->string('question_7_answer_explain')->nullable();
            $table->string('question_7_answer_limitation')->nullable();
            $table->string('question_8_answer_date')->nullable();
            $table->string('question_8_answer_for_whate')->nullable();

            $table->string('reference_company_name')->nullable();
            $table->string('reference_address')->nullable();
            $table->string('reference_person_name')->nullable();
            $table->string('reference_contact')->nullable();
            $table->string('reference_position_in_company')->nullable();
            $table->string('reference_acquainted')->nullable();

            $table->string('representative_name')->nullable();
            $table->string('representative_title')->nullable();
            $table->string('representative_date')->nullable();
            $table->string('representative_signature')->nullable();
            $table->string('representative_phone')->nullable();

            $table->unsignedInteger('user_id')->nullable();

            $table->timestamps();
        });


        Schema::table('user_profiles', function($table) {
            //if 'permissions'  table  exists
            if(Schema::hasTable('users'))
            {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
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
        Schema::dropIfExists('user_profiles');
    }
}
