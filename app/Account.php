<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $fillable = ['ref_num','branch_ID','Salutation','first_name','middle_name','last_name','tel_no','mobile_no','gender','citizenship_passport_no','place_of_issue','date_of_issue','date_type_dob','date_of_birth','birth_country','marital_status','occupation','grand_father_name','father_name','mother_name','permanent_house_no','permanent_street','permanent_ward_no','permanent_vdc_mc','permanent_city','permanent_country_name','current_house_no','current_address','current_city','current_country_name','source_of_fund','expected_transaction_currency','expected_transaction_amount','expected_transaction_no','nature_of_transaction','internet_banking','uploaded_doc','user_id'];
}



