<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table="categorys";
    protected $fillable = [
        'name'
    ];
    //! lazy loading
    function product(){
        return $this->hasMany(product::class);
    }
    //!eager loading
}
