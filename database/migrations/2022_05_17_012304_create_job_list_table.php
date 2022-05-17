<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_list', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('job_title')->charset('utf8')->collate('utf8_cs')->unique();;
            $table->string('description');
            $table->string('employment_type');
            $table->integer('vacancy');    //number of vacancy
            $table->integer('applicant');  //number of applicant
            $table->integer('accepted');   //number of accepted
            $table->integer('denied');     //number of denied
            $table->string('link');         //url generate
            $table->integer('requirement_id'); //link to requirements for non-teaching && teaching
            $table->string('added_requirements'); //link to requirements for non-teaching && teaching
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_list');
    }
}
