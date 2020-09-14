<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cheque extends Model
{
    protected $fillable = ['branch','date','leaves','account_number','account_Name','currency','auth_name','user_id'];
}
