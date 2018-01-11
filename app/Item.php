<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    protected $guarded = [];
    
    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }

    public function setNetamountAttribute($value)
    {
        $this->attributes['netamount'] = str_replace(",", "",$value);
    }
    public function getNetamountAttribute($value)
    {
        return number_format($value, 2);
    }
}

