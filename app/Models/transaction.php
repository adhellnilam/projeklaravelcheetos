<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id','address','name','quantity','payment_id'
     ];

    public function product(){
        return $this->belongsTo(product::class,'product_id','id');
    }
    
    public function payment(){
        return $this->belongsTo(payment::class,'payment_id','id');
    }
}
