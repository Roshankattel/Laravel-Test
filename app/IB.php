<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IB extends Model
{
    //
    protected $fillable = ['date', 'branch','service','applicant_name','address','account_number','mobile_no','application_for','change_add_mobile_no','new_account_no','e_required_service','email','i_required_service','linked_Account_no','linked_accoun_name'];
}