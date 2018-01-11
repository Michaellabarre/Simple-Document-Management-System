<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Payroll extends Model
{
    protected $table = 'payroll';
    protected $guarded = [];

    public function Item()
    {
        return $this->hasMany(Item::class);
    }

    public function Payrolltype()
    {
     	return $this->belongsTo('App\Payrolltype');
    }


    public function setNetamountAttribute($value)
    {
        $this->attributes['net_amount'] = str_replace(",", "",$value);
    }

    public function getNetamountAttribute($value)
    {
        return number_format($value, 2);
    }

}

