<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = ['ContractNumber','Partner','ContractCategory','ContractStartDate','ContractEndDate'];

    public function contract_details()
    {
    return $this->hasMany(ContractDetail::class);
    }
    
}
