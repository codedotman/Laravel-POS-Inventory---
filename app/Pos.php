<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    protected $fillable =[
        'id', 'category_id','product_id','buyer', 'quantity','size','result', 'rate','total','paid','due','date','payment'
     ];
 
 
     public function category()
     {
         return $this->belongsTo(Category::class);
     }
     public function product()
     {
         return $this->belongsTo(Item::class);
     }
 
}
