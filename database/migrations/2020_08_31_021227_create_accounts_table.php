<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number');
            $table->string('branch_ID');
            $table->string('salutation');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->bigInteger('tel_no')->nullable();
            $table->biginteger('mobile_no');
            $table->string('gender');
            $table->string('citizenship_passport_no')->unique();
            $table->string('place_of_issue');
            $table->string('date_of_issue');
            $table->string('date_type_dob');
            $table->string('date_of_birth');
            $table->string('birth_country');
            $table->string('marital_status');
            $table->string('occupation');
            //organization name and details here
            $table->string('organization_name')->nullable();
            $table->string('organization_address')->nullable();
            $table->string('designation')->nullable();
            $table->string('estimated_annual_income')->nullable();
            $table->string('organization_tel_no')->nullable();
            //more family information
            $table->string('grand_father_name');
            $table->string('father_name');
            $table->string('mother_name');
            //permanant address starts below
            $table->string('permanent_house_no')->nullable();
            $table->string('permanent_street')->nullable();
            $table->string('permanent_ward_no');
            $table->string('permanent_vdc_mc');
            $table->string('permanent_city');
            $table->string('permanent_country_name');
            //current address starts below
            $table->string('current_house_no')->nullable();
            $table->string('current_address');
            $table->string('current_city');
            $table->string('current_country_name');
            //other details
            $table->string('source_of_fund');
            $table->string('expected_transaction_currency');
            $table->integer('expected_transaction_amount');
            $table->integer('expected_transaction_no');
            $table->string('nature_of_transaction');
            $table->string('internet_banking');
            //for account status and account number
            $table->string('account_number')->nullable();
            $table->string('status')->default('new');
            $table->integer('customer_ID')->nullable();
            //for uploaded file
            $table->string('uploaded_doc');
            $table->integer('user_id');
            $table->timestamps();

        }); //
    }
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
