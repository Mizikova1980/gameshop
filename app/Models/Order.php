<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;


    const STATE_CURRENT = 1;
    const STATE_PROCESSED = 2;
    protected $fillable = [
        'user_id',
        'state',
    ];

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'order_products',
            'order_id',
            'product_id'
        );

    }

    public function getSum()
    {
       $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
       }

       return $sum;
    }

    public static function getCurrentOrder(int $id)
    {
        return self::query()
        ->where('user_id', '=',$id)
        ->where('state', '=', Order::STATE_CURRENT)
        ->first();
    }

    public function saveAsProcessed()
    {
        $this->state = self::STATE_PROCESSED;
        return $this->save();
    }

}
