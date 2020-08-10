<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractDetail extends Model
{
    //
protected $fillable = ['item_name','qtty','price','value'];
public function Contract()
{
return $this->belongsTo(Contract::class);
}

}
