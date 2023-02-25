<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
       'img','name','description','category_id','stock','price'
    ];

    public function kategori(){
        return $this->belongsTo(category::class,'category_id','id');
    }
}
