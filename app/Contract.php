<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = ['id','ContractNumber','Partner','ContractCategory','ContractStartDate','ContractEndDate'];
}
