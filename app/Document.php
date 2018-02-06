<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
   protected $table = 'tbl_document';
   protected $guarded = [];
   
   public function Document()
   {
        return $this->hasMany(Action::class);
   }
}
