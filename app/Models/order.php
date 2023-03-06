<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    // protected $with=[""]
    protected $fillable=[
        "user_id",
        "product_id",
    ];
    function user(){
        return $this->belongsTo(User::class);
    }
    function product(){
        return $this->belongsTo(product::class);
    }
}
