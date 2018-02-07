<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
   protected $table = 'tbl_document';
   protected $guarded = [];
   
   public function Action()
   {
        return $this->hasMany(Action::class);
   }
}
