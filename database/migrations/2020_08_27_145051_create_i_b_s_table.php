<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('i_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('date');
            $table->string('service');
            $table->string('applicant_name');
            $table->string('address');
            $table->biginteger('account_number');
            $table->biginteger('mobile_no');
            $table->string('application_for');
            $table->biginteger('change_add_mobile_no');
            $table->biginteger('new_account_no');
            $table->string('e_required_service');
            $table->string('email');
            $table->string('i_required_service');
            $table->biginteger('linked_account_no')->nullable();
            $table->string('linked_account_name')->nullable();
            $table->string('status')->default('new');
            $table->integer('user_id');
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
        Schema::dropIfExists('i_b_s');
    }
}
