<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
   	protected $guarded = [];
   	protected $table = 'deposit';

   	public function setNetamountAttribute($value)
    {
        $this->attributes['net_amount'] = str_replace(",", "",$value);
    }

    public function getNetamountAttribute($value)
    {
        return number_format($value, 2);
    }

}
