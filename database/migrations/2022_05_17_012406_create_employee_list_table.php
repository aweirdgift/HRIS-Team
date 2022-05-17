<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_list', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('school_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->date('date_hired');
            $table->string('position');
            $table->integer('salary');
            $table->string('contract_period');
            $table->date('birthday');
            $table->string('status');
            $table->string('department');
            $table->string('email');
            $table->string('prc_id');
            $table->string('eligibility');
            $table->string('landbank_id');
            $table->string('sss_id');
            $table->string('pagibig_id');
            $table->string('philhealth_id');
            $table->string('tin_id');
            $table->integer('contact_number');
            $table->float('height');
            $table->float('weight');
            $table->string('address');
            $table->foreignId('user_id');
            $table->string('diploma');
            $table->string('applicant_letter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_list');
    }
}
