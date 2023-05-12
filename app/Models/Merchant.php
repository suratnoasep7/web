<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    
    /**
     * filllable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'address'
    ];

    
    public function merchant(){
        return $this->hasMany('App\Product', 'merchant_id', 'id');
    }
}
