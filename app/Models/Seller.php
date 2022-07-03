<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];


    public function ordersDay()
    {
        return $this->hasMany(Order::class)
            ->with('commission')
            ->whereDate('created_at', date('Y-m-d'));
    }

}
