<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debits', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('date');
            $table->string('service');
            $table->string('applicants_name');
            $table->string('applicants_address');
            $table->biginteger('account_number');
            $table->string('card_Type');
            $table->biginteger('existing_card_number')->nullable();
            $table->string('reason_for_replacement')->nullable();
            $table->string('supplementary_name')->nullable();
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
        Schema::dropIfExists('debits');
    }
}
