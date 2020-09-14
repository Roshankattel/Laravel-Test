<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class debit extends Model
{
    protected $fillable = ['branch','date','service','applicants_name','applicants_address','account_number','card_type','existing_card_number','reason_for_replacement','supplementary_name'];
}
       