<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    /**
     * filllable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'weight', 'price', 'stock'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function merchant(){
        return $this->belongsTo('App\Models\Merchant', 'merchant_id');
    }

}
