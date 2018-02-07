<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_act_document';

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

}

