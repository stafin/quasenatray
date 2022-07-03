<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'order_value',
        'commission_id',
        'commission_value'
    ];


    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }


    public function commission()
    {
        return $this->belongsTo(Commission::class);
    }


}
